<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }

    public function status() {
        return $this->hasOne('App\Models\Status');
    }

    public function photos() {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
}
