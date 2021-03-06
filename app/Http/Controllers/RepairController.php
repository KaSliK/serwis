<?php

namespace App\Http\Controllers;

use App\Http\Requests\RepairRequest;
use App\Models\Repair;
use App\Serwis\Gateways\BackendGateway;
use App\Serwis\Repositories\ClientRepository;
use App\Serwis\Repositories\ItemRepository;
use App\Serwis\Repositories\RepairRepository;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function __construct(RepairRepository $repairRepository, ClientRepository $clientRepository, ItemRepository $itemRepository, BackendGateway $backendGateway)
    {
        $this->rR = $repairRepository;
        $this->cR = $clientRepository;
        $this->iR = $itemRepository;
        $this->bG = $backendGateway;
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

    public function repairPhotos($id) {
        return view('backend.repairs.gallery', ['example' => $this->rR->getRepairWithPhoto($id)]);
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
        $this->rR->createRepair($request);
        return redirect()->route('repairs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rew, $identifier)
    {
        if($this->bG->checkRepairAddress($rew, $identifier))
        return view('backend.repairs.show', ['repair' => $this->rR->getRepair($rew-1000)]);
        return view('backend.repairs.wrongLink');



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
