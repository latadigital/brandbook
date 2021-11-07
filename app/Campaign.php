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

    public function productManager()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
