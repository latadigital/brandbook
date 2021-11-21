<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class MediaController extends Controller
{
    public function media() {
      $size = 0;
      $sizeCampaign = 0;
      $categories = [
        "images" => ["title" => "Imágenes", "class" => "bg-light-primary text-primary", "icon" => "bx-image", "size" => 0, "qty" => 0],
        "documents" => ["title" => "Documentos", "class" => "bg-light-success text-success", "icon" => "bxs-file-doc", "size" => 0, "qty" => 0],
        "media" => ["title" => "Multimedia", "class" => "bg-light-danger text-danger", "icon" => "bx-video", "size" => 0, "qty" => 0],
        "ilustrator" => ["title" => "Ilustrator", "class" => "bg-light-warning text-warning", "icon" => "bx-vector", "size" => 0, "qty" => 0],
        "photoshop" => ["title" => "Photoshop", "class" => "bg-light-info text-info", "icon" => "bx-brush", "size" => 0, "qty" => 0],
        "unknown" => ["title" => "Unknown Files", "class" => "bg-light-dark text-dark", "icon" => "bx-vector", "size" => 0, "qty" => 0],
      ];
      foreach(\File::allFiles(public_path('storage')) as $file)
      {
        $size += $file->getSize();
        $sizeCampaign += getSizeFolder($file->getSize(), $file->getPath(), 'storage/campaigns');
        $categories = getCategories($file, $categories);
      }
      $files = File::whereNull("deleted_at")->orderBy('created_at', 'desc')->limit(20)->get();
      $output = [
        "sizeTotal" => $size,
        "sizeCampaign" => $sizeCampaign,
        "files" => $files,
        "categories" => $categories,
      ];
      dump($categories);
      return view("admin.media.media", $output);
    }
}
