<?php

namespace App\Http\Controllers;

use App\Serwis\Gateways\BackendGateway;
use App\Serwis\Repositories\ContactDetailsRepository;
use Illuminate\Http\Request;

class ContactDetailsController extends Controller
{
    public function __construct(ContactDetailsRepository $contactDetailsRepository, BackendGateway $backendGateway)
    {

        $this->bG= $backendGateway;
        $this->cR = $contactDetailsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('backend.dashboard', ['details' => $this->cR->getDetails()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->bG->createOrUpdateDetails($request);
        return redirect()->route('contact_details.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
