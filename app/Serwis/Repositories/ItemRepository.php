<?php

namespace App\Serwis\Repositories;



use App\Models\Item;
use App\Serwis\Traits\PhotoTrait;
use http\Env\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ItemRepository {
    use PhotoTrait;

    public function getItems() {
        $items = Item::orderBy('model')->paginate(20);
        return $items->appends(['sort' => 'model']);
    }

    public function getItem($id) {
        return Item::find($id);
    }

    public function updateItem($request, $id) {
        return Item::where('id', $id)->update($request->except(['_token', '_method']));
    }

    public function deleteItem($id) {
        return Item::where('id', $id)->delete();
    }

    public function createItem($request) {
        Session::flash('success', "Success!");
        return Item::create($request->except(['_token', '_method']));
    }






}
