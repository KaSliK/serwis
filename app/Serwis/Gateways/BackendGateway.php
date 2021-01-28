<?php
namespace App\Serwis\Gateways;

use App\Serwis\Repositories\ContactDetailsRepository;

class BackendGateway {

    public function __construct(ContactDetailsRepository $contactDetailsRepository) {
        $this->cR = $contactDetailsRepository;
    }

    public function createOrUpdateDetails($request) {
        if($this->cR->getDetails() != null) {
            return $this->cR->updateDetails($request);
        }
        return $this->cR->createDetails($request);
    }
}
