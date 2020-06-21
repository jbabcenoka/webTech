<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function veikala_darbinieks() {
        return $this->hasOne('App\VeikalaDarbinieks');
    }
    public function pardotie() {
        return $this->hasOne('App\Pardotie');
    }
    public function adrese() {
        return $this->hasOne('App\Adrese');
    }
}
