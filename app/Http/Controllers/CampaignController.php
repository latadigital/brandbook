<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CampaignPostRequest;
use Carbon\Carbon;
use Storage;

use App\Campaign;
use App\Status;
use App\User;
use App\Category;
use App\File;

define("PRODUCT_MANAGER_ROLE_ID_", 3);
define("BASE_URL_CAMPAIGN_EASY", "https://easy.cl/tienda/");

class CampaignController extends Controller
{
    public function campaign(Request $req)
    {
      $search = $req->get("search");
      $query = Campaign::whereNull('deleted_at')->orderBy('created_at', 'desc');
      if ($search != "") {
        $query->where(function($query) use ($search) {
          $query
            ->where("name", "like", "%".$search."%")
            ->orWhere("description", "like", "%".$search."%");
        });
      }
      $query->orderBy('created_at', 'desc')->get();
      $campaigns = $query->get();
      if ($req->get("type") === "json") {
        return $campaigns;
      }
      $output = [
          "campaigns" => $campaigns,
          "word_search" => $search,
      ];
      return view('admin.campaign.campaign', $output);
    }

    public function createCampaign()
    {
      $statuses = Status::all();
      $productManagers = User::where("role_id", PRODUCT_MANAGER_ROLE_ID_)->where("active", true)->get();
      $categories = Category::all();
      $output = [
        "statuses" => $statuses,
        "productManagers" => $productManagers,
        "categories" => $categories,
        "base_url_campaign_easy" => BASE_URL_CAMPAIGN_EASY,
      ];
      return view("admin.campaign.campaign-create", $output);
    }

    public function createUploadCampaign(CampaignPostRequest $req) {
      $icon = "";
      if($req->hasFile('icon')){
          $icon = $req->icon->hashName();
          $req->icon->storeAs('icon',$icon,'public');
      }
      $screenshot = "";
      if($req->hasFile('screenshot')){
          $screenshot = $req->screenshot->hashName();
          $req->screenshot->storeAs('screenshot',$screenshot,'public');
      }
      $campaign = Campaign::create([
        'name' => $req->input('name'),
        'description' => $req->input('description'),
        'url' => $req->input('url'),
        'release_date' => $req->input('release_date'),
        'end_date' => $req->input('end_date'),
        'status_id' => $req->input('status'),
        'icon' => $icon,
        'screenshot' => $screenshot,
        'deleted_at' => Carbon::now(),
      ]);
      $campaign->categories()->sync($req->input("category"));
      $campaign->productManagers()->sync($req->input("product_manager"));

      $output = [
        "campaign_id" => $campaign->id,
        "modeUpdate" => false,
      ];
      return view("admin.campaign.campaign-upload", $output);
    }

    public function createCampaignPost(Request $req)
    {
      $campaignId = (int) $req->input("campaign_id");
      if (!$campaignId) {
        return redirect()->route('admin_campaign');
      }
      $campaign = Campaign::find($campaignId);
      $campaign->deleted_at = null;
      $campaign->save();

      return redirect()->route('admin_campaign');
    }

    public function editCampaign($campaignId = 0) {
      $campaign = Campaign::find($campaignId);
      if (!$campaign) {
        return redirect()->route('admin_campaign');
      }
      $statuses = Status::all();
      $productManagers = User::where("role_id", PRODUCT_MANAGER_ROLE_ID_)->where("active", true)->get();
      $categories = Category::all();
      $output = [
        "campaign" => $campaign,
        "statuses" => $statuses,
        "productManagers" => $productManagers,
        "categories" => $categories,
        "base_url_campaign_easy" => BASE_URL_CAMPAIGN_EASY,
      ];
      return view("admin.campaign.campaign-edit", $output);
    }

    public function editUploadCampaign(CampaignPostRequest $req, $campaignId = 0) {
      $campaign = Campaign::find($campaignId);
      if (!$campaign) {
        return redirect()->route('admin_campaign');
      }
      $campaign->name = $req->input("name");
      $campaign->description = $req->input("description");
      $campaign->url = $req->input("url");
      $campaign->release_date = $req->input("release_date");
      $campaign->end_date = $req->input("end_date");
      $campaign->status_id = $req->input("status");
      $campaign->productManagers()->sync($req->input("product_manager"));
      $campaign->categories()->sync($req->input("category"));
      if($req->hasFile('icon')){
          $icon = $req->icon->hashName();
          $req->icon->storeAs('icon',$icon, 'public');
          $campaign->icon = $icon;
      }
      if($req->hasFile('screenshot')){
          $screenshot = $req->screenshot->hashName();
          $req->screenshot->storeAs('screenshot',$screenshot, 'public');
          $campaign->screenshot = $screenshot;
      }
      $campaign->save();

      $output = [
        "campaign_id" => $campaignId,
        "modeUpdate" => true,
      ];
      return view("admin.campaign.campaign-upload", $output);
    }

    public function getUploadsCampaignId($campaignId = 0) {
      $files = File::where('campaign_id', $campaignId)->get();
      $filesParser = [];
      foreach($files as $file) {
        $pathfilename = $file->categoryFile->folder.'/'.$campaignId.'/'.$file->url;
        array_push($filesParser, [
          "name" => $file->name,
          "newname" => $file->url,
          "size" => Storage::disk('public')->size($pathfilename),
          "type" => Storage::disk('public')->mimeType($pathfilename),
          "url" => asset("storage/".$pathfilename),
        ]);
      }
      $output = [
        "files" => $filesParser,
      ];
      return response()->json($output);
    }

    public function deleteCampaign($campaignId = 0) {
      $campaign = Campaign::find($campaignId);
      if (!$campaign) {
          return redirect()->back();
      }
      $campaign->deleted_at = Carbon::now();
      $campaign->save();

      return redirect()->route('admin_campaign');
    }
}
