<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = "files";

    protected $fillable = [
        'name',
        'url',
        'deleted_at',
    ];

    protected $hidden = [
        'deleted_at',
    ];
}
