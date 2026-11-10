<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
    ];
}