<?php

namespace App\Serwis\Repositories;



use App\Models\Client;
use App\Models\Photo;
use App\Serwis\Traits\PhotoTrait;
use http\Env\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClientsRepository {
    use PhotoTrait;

    public function getClients() {
        $clients = Client::orderBy('surname')->paginate(20);
        return $clients->appends(['sort' => 'surname']);
//        return Client::paginate(3)->appends(['sort' => 'surname']);
    }




}
