<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CampaignPostRequest;
use Carbon\Carbon;
use App\Campaign;
use App\Status;
use App\User;
use App\Category;

define("PRODUCT_MANAGER_ROLE_ID", 3);
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

      $output = [
          "campaigns" => $campaigns,
          "word_search" => $search,
      ];
      return view('admin.campaign.campaign', $output);
    }

    public function createCampaign()
    {
      $statuses = Status::all();
      $productManagers = User::where("role_id", PRODUCT_MANAGER_ROLE_ID)->where("active", true)->get();
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
      $campaignID = Campaign::create([
        'name' => $req->input('name'),
        'description' => $req->input('description'),
        'url' => $req->input('url'),
        'release_date' => $req->input('release_date'),
        'end_date' => $req->input('end_date'),
        'status_id' => $req->input('status'),
        'category_id' => $req->input('category'),
        'product_manager_id' => $req->input('product_manager'),
        'icon' => $icon,
        'screenshot' => $screenshot,
        'deleted_at' => Carbon::now(),
      ])->id;

      $output = [
        "campaign_id" => $campaignID,
      ];
      return view("admin.campaign.campaign-upload", $output);
    }

    public function createCampaignPost(CampaignPostRequest $req) {
      dd($req->all());
    }

    public function editCampaign() {
      return view("admin.campaign.campaign-edit");
    }
}
