<?php

namespace App\Traits;

Trait Common {
    public function uploadFile($file, $path){
        $file_extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $file_extension;
        $file->move($path, $fileName);
        return $fileName;
    }
}