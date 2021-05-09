<?php
namespace App\Serwis\Gateways;

use App\Models\Repair;
use App\Serwis\Repositories\ContactDetailsRepository;
use App\Serwis\Repositories\RepairRepository;

class BackendGateway {

    public function __construct(ContactDetailsRepository $contactDetailsRepository, RepairRepository $repairRepository) {
        $this->cR = $contactDetailsRepository;
        $this->rR = $repairRepository;
    }

    public function createOrUpdateDetails($request) {
        if($this->cR->getDetails() != null) {
            return $this->cR->updateDetails($request);
        }
        return $this->cR->createDetails($request);
    }

    public function checkRepairAddress($rew, $identifier) {
        if($identifier>1000) {
            $repair = $this->rR->getRepair($rew-1000);
            if($repair->identifier == $identifier) return true;
        }
        return false;
    }
}
