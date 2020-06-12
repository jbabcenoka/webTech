<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function veikala_darbinieks() {
        return $this->hasOne('App\VeikalaDarbinieks');
    }
    public function pardotie_un_bojatie() {
        return $this->hasOne('App\PardotieUnBojatie');
    }
}
