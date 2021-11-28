<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotCampaignCategory extends Model
{
  protected $table = 'pivot_campaign_categories';
  protected $fillable = [
      'campaign_id',
      'category_id',
  ];
}
