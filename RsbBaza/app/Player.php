<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];

    protected $dates = [
        'dob',
        'joined',
        'contract_until',
        'created_at',
        'updated_at'
    ];
}
