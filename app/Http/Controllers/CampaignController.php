<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function campaign() {
        return view("admin.campaign.campaign");
    }

    public function createCampaign() {
        return view("admin.campaign.campaign-create");
    }

    public function editCampaign() {
        return view("admin.campaign.campaign-edit");
    }
}
