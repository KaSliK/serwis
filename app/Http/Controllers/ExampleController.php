<?php

namespace App\Http\Controllers;

use App\Panel\Repositories\BackendRepository;
use Illuminate\Http\Request;


class ExampleController extends Controller
{
    /*public function __construct(BackendGateway $backendGateway, BackendRepositoryInterface $backendRepository)
    {
        $this->middleware('CheckAdmin');
        $this->bG = $backendGateway;
        $this->bR = $backendRepository;
    }*/
    public function __construct(BackendRepository $backendRepository)
    {
        $this->bR = $backendRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.examples.example', ['examples'=>$this->bR->getExamples()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.examples.create');
//        return redirect()->route('backend.examples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->bR->createExample($request);
        return redirect()->route('examples.index');
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
        return view('backend.examples.edit', ['example'=>$this->bR->getExample($id)]);
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

        $this->bR->updateExample($request, $id);
        return redirect()->route('examples.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->bR->deleteExample($id);
        return redirect()->route('examples.index');
    }
}
