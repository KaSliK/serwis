<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
      'brand',
      'model'
    ];


    public function repair() {
        return $this->belongsToMany('App\Models\Repair');
    }
}
