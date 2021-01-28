<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'company_name',
        'owner_name',
        'post_code',
        'city',
        'address',
        'email',
        'phone_number'
    ];
}
