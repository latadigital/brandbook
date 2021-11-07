<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function media() {
        return view("admin.media.media");
    }
}
