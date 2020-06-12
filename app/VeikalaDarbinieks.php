<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VeikalaDarbinieks extends Model
{
   public function amats() {
        return $this->belongsTo('App\Amats'); 
    }
    public function persona() {
        return $this->hasOne('App\Persona'); 
    }
}
