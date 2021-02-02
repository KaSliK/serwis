<?php

namespace App\Serwis\Presenters;

trait ClientPresenter {
    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }

    public function getFullAddress() {
        return $this->post_code . ' ' . $this->city . ' ' . $this->street;
    }
}
