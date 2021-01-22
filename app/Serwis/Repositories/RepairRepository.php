<?php

namespace App\Serwis\Repositories;

use App\Models\Repair;
use http\Env\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class RepairRepository {

    public function getRepairs() {
        $clients = Repair::orderBy('created_at')->paginate(20);
        return $clients->appends(['sort' => 'created_at']);
    }

    public function getRepair($id) {
        return Repair::find($id);
    }

    public function updateRepair($request, $id) {
        return Repair::where('id', $id)->update($request->except(['_token', '_method']));
    }

    public function deleteRepair($id) {
        return Repair::where('id', $id)->delete();
    }

    public function createClient($request) {
        Session::flash('success', "Success!");
        return Repair::create($request->except(['_token', '_method']));
    }






}
