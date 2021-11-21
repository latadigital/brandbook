<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = "files";

    protected $fillable = [
      'name',
      'url',
      'campaign_id',
      'category_file_id',
      'deleted_at',
    ];

    protected $hidden = [
      'deleted_at',
    ];

    public function categoryFile()
    {
        return $this->belongsTo(CategoryFile::class);
    }
}
