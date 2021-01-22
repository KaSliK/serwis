<?php

namespace App\Serwis\Repositories;



use App\Models\Client;
use App\Models\Photo;
use App\Serwis\Traits\PhotoTrait;
use http\Env\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClientRepository {
    use PhotoTrait;

    public function getClients() {
        $clients = Client::orderBy('surname')->paginate(20);
        return $clients->appends(['sort' => 'surname']);
    }

    public function getClient($id) {
        return Client::find($id);
    }

    public function updateClient($request, $id) {
        return Client::where('id', $id)->update($request->except(['_token', '_method']));
    }

    public function deleteClient($id) {
        return Client::where('id', $id)->delete();
    }

    public function createClient($request) {
        Session::flash('success', "Success!");
        return Client::create($request->except(['_token', '_method']));
    }






}
