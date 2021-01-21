<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function repair() {
        return $this->belongsToMany('App\Models\Repair', 'status_id');
    }
}
