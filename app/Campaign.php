<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = "campaigns";

    protected $fillable = [
        'name',
        'description',
        'url',
        'icon',
        'screenshot',
        'release_date',
        'end_date',
        'status_id',
        'category_id',
        'product_manager_id',
        'deleted_at',
    ];

    protected $hidden = [
        'deleted_at',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'pivot_campaign_categories', 'campaign_id', 'category_id');
    }

    public function productManagers()
    {
        return $this->belongsToMany(User::class, 'pivot_campaign_product_managers', 'campaign_id', 'product_manager_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
