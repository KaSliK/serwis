<?php

namespace App\Serwis\Presenters;

trait ClientPresenter {
    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }
}
