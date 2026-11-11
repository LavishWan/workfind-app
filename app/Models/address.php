<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable = [
        'country',
        'region',
        'town',
        'street',
    ];
}
