<?php

namespace App\Http\Controllers;

use App\Http\Requests\RepairRequest;
use App\Serwis\Repositories\ClientRepository;
use App\Serwis\Repositories\ItemRepository;
use App\Serwis\Repositories\RepairRepository;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function __construct(RepairRepository $repairRepository, ClientRepository $clientRepository, ItemRepository $itemRepository)
    {
        $this->rR = $repairRepository;
        $this->cR = $clientRepository;
        $this->iR = $itemRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.repairs.repairs', ['repairs'=>$this->rR->getRepairs()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.repairs.create', ['clients' => $this->cR->getClients(), 'items' => $this->iR->getItems()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RepairRequest $request)
    {
//        dd($request->all());
        $this->rR->createRepair($request);
        return redirect()->route('repairs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.repairs.edit', ['repair' => $this->rR->getRepair($id),'clients' => $this->cR->getClients(), 'items' => $this->iR->getItems(), 'statuses' => $this->rR->getStatuses()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RepairRequest $request, $id)
    {
        $this->rR->updateRepair($request, $id);
        return redirect()->route('repairs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->rR->deleteRepair($id);

    }
}
