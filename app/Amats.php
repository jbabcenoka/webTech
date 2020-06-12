<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amats extends Model
{
    public function veikala_darbinieks() {
        return $this->hasMany('App\VeikalaDarbinieks');
    }
}
