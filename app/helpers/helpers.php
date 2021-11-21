<?php

define('IMAGES_TYPES', ['png','jpeg','jpg','gif']);
define('DOCUMENTS_TYPES', ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx']);
define('MEDIA_TYPES', ['mp3', 'mp4', 'avi', 'mov', 'wmv', 'mkv', 'mpeg', 'mpg']);
define('ILUSTRATOR_TYPES', ['ai']);
define('PHOTOSHOP_TYPES', ['psd']);

if (!function_exists('bytesToHuman')) {
  function bytesToHuman($bytes)
  {
    $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
    for ($i = 0; $bytes > 1024; $i++) {
      $bytes /= 1024;
    }
    return round($bytes, 2) . ' ' . $units[$i];
  }
}

if (!function_exists('getSizeFolder')) {
  function getSizeFolder($bytes, $path = '', $contain = '')
  {
    if (str_contains($path, $contain)) {
      return $bytes;
    }
  }
}

if (!function_exists('getCategories')) {
  function getCategories($file, $categories) {
    if (in_array($file->getExtension(), IMAGES_TYPES)) {
      $categories["images"]["size"] += $file->getSize();
      $categories["images"]["qty"] += 1;
    }
    elseif (in_array($file->getExtension(), DOCUMENTS_TYPES)) {
      $categories["documents"]["size"] += $file->getSize();
      $categories["documents"]["qty"] += 1;
    }
    elseif (in_array($file->getExtension(), MEDIA_TYPES)) {
      $categories["media"]["size"] += $file->getSize();
      $categories["media"]["qty"] += 1;
    }
    elseif (in_array($file->getExtension(), ILUSTRATOR_TYPES)) {
      $categories["ilustrator"]["size"] += $file->getSize();
      $categories["ilustrator"]["qty"] += 1;
    }
    elseif (in_array($file->getExtension(), PHOTOSHOP_TYPES)) {
      $categories["photoshop"]["size"] += $file->getSize();
      $categories["photoshop"]["qty"] += 1;
    }
    else {
      $categories["unknown"]["size"] += $file->getSize();
      $categories["unknown"]["qty"] += 1;
    }

    return $categories;
  }
}
