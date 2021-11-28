<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotCampaignProductManager extends Model
{
  protected $table = 'pivot_campaign_product_managers';
  protected $fillable = [
    'product_manager_id',
    'campaign_id',
  ];
}
