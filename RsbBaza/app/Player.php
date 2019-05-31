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

    protected $image = 'images/default-profile.png';


    // Accessor
    public function getPreferredFoot($attribute)
    {
        return $this->preferredFoot()[$attribute];
    }

    public function preferredFoot()
    {
        return ['Desna', 'Leva', 'Obe'];
    }

    public function getImageAttribute($image){
        if ($image) {
            return $this->location.$image;
        }
    }
}
