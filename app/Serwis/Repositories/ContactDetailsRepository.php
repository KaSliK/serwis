<?php

namespace App\Serwis\Repositories;
use App\Models\ContactDetails;
use Illuminate\Support\Facades\Session;


class ContactDetailsRepository {

    public function getDetails() {
        return ContactDetails::first();
    }

    public function updateDetails($request) {
        return ContactDetails::first()->update($request->except(['_token', '_method']));
    }
    public function createDetails($request) {
        Session::flash('success', "Success!");
        return ContactDetails::create($request->except(['_token', '_method']));
    }






}
