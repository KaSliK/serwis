<?php

namespace App\Models;

use App\Serwis\Presenters\ClientPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Client extends Model
{
    use ClientPresenter;

//$user = User::factory()->make();

    protected $guarded = [];
    use HasFactory;

    public function repairs() {
        return $this->hasMany('App\Models\Repair');
    }

}
