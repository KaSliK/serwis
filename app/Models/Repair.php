<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'serial_number',
        'client_id',
        'status_id',
        'item_id',
        'price',
        'picked_up',
        'description'
    ];
    use HasFactory;

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }

    public function item() {
        return $this->belongsTo('App\Models\Item');
    }

    public function status() {
        return $this->belongsTo('App\Models\Status');
    }

    public function photos() {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
}
