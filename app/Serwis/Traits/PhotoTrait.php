<?php

namespace App\Serwis\Traits;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

trait PhotoTrait {

    public function isPhoto($request){
        return $request->hasFile('photo') ? true : false;
    }
    public function checkPhoto($request) {
        if($request->hasFile('photo')) {
            return true;
        } else {
            Session::flash('noPhoto', 'Nie dodałeś zdjęcia');
            return false;
        }
    }
    public function storePhoto($request) {
        $extension = $request->photo->extension();
        $stripped_name = str_replace(' ', '', $request->input('title')) . "" . rand() . ".".$extension;
        $request->photo->storeAs('/public', $stripped_name);
        return $stripped_name;
    }
    public function getPhotoableType() {
        return 'App\Models\\' . ucfirst(explode('/',$_SERVER['HTTP_REFERER']) [3]);
    }
    public function getParentName() {
        return $this->getPhotoableType();
    }
}
