<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use App\Models\Repair;
use App\Models\User;
use App\Serwis\Repositories\BackendRepository;
use App\Serwis\Repositories\ContactDetailsRepository;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct(BackendRepository $backendRepository, ContactDetailsRepository $contactDetailsRepository)
    {
        $this->cR = $contactDetailsRepository;
        $this->bR = $backendRepository;
    }
    public function index()
    {
        return view ('backend.dashboard', ['details' => $this->cR->getDetails()]);
    }
    public function index1()
    {
        return view ('backend.dashboard', ['details' => $this->cR->getDetails()]);
    }
    public function example() {
        return view('backend.examples.example');
    }
    public function mails() {
        return view('backend.mails');
    }
    public function media() {
        return view('backend.media', ['photos' => $this->bR->getPhotos()]);
    }
    public function subpages() {
        return view('backend.subpages');
    }
    public function examplePhotos($id) {
        return view('backend.examples.gallery', ['example' => $this->bR->getExampleWithPhotos($id)]);
    }
    public function createUserForm() {
        return view('backend.users.create');
    }

    public function createUser(Request $request) {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->back();
    }

    public function createPDF($id) {
        $repair = Repair::find($id);
        $contact_details = ContactDetails::first();


        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
//        view()->share('repair', $data);
        $pdf = PDF::loadView('pdfView', [
            'repair' => $repair,
            'details' => $contact_details,
        ]);
        return $pdf->stream('pdf_file.pdf');
    }

}
