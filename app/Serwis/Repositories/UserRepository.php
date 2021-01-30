<?php

namespace App\Serwis\Repositories;



use App\Models\Item;
use App\Models\User;
use App\Serwis\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserRepository {

    public function getUsers() {
        return User::all();
    }
    public function getUser($id) {
        return User::find($id);
    }

    public function updateUser($request, $id) {
        return User::where('id', $id)->update($request->except(['_token', '_method']));
    }

    public function deleteUser($id) {
        return User::where('id', $id)->delete();
    }

    public function createUser(Request $request) {
        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
    }






}
