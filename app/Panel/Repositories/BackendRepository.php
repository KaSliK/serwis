<?php

namespace App\Panel\Repositories;



use App\Models\Example;
use App\Models\Photo;
use App\Panel\Traits\PhotoTrait;
use http\Env\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BackendRepository {
    use PhotoTrait;

    public function getPhotos() {
        return Photo::all();
    }
    public function getExamples() {
        return Example::all();
    }
    public function getExample($id) {
        return Example::find($id);
    }
    public function getExampleWithPhotos($id) {
        return Example::with('photos')->find($id);
    }
    public function updateExample($request, $id) {
        $dataArray = [
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
        ];

        return Example::where('id', $id)->update($dataArray);
    }

    public function createExample($request) {
            Session::flash('success', "Success!");
            return Example::create([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'description' => $request->input('description'),
            ]);
    }

    public function deleteExample($id) {
        /*$photos = Photo::where('photoable_id', $id)->where('photoable_type', 'App\Models\Example');
        foreach ($photos->get() as $photo) {
            Storage::delete('public\\' . $photo->name);
        }
       $photos->delete();*/
        return Example::where('id', $id)->delete();

    }
    public function createPhoto($request) {
        if ($this->checkPhoto($request)) {
            Session::flash('success', "Success!");
            $name = $this->storePhoto($request);
            return Photo::create([
                'photoable_type' => $this->getPhotoableType(),
                'photoable_id' => $request->input('photoable_id'),
                'name' => $name,
                'path' => Storage::url($name),
                'alt' => $request->input('alt')
            ]);
        }
    }



}
