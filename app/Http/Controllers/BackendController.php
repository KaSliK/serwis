<?php

namespace App\Http\Controllers;

use App\Panel\Repositories\BackendRepository;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct(BackendRepository $backendRepository)
    {
        $this->bR = $backendRepository;
    }
    public function index() {
        return view('backend.dashboard');
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

}
