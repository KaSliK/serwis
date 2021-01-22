<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';


    public function repair() {
        return $this->hasMany('App\Models\Repair', 'status_id');
    }
}
