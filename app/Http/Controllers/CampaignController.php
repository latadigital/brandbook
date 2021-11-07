<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Campaign;

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

    public function createCampaign() {
        return view("admin.campaign.campaign-create");
    }

    public function editCampaign() {
        return view("admin.campaign.campaign-edit");
    }
}
