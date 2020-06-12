<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZieduGlabApstakli extends Model
{
    public function esosas_preces() {
        return $this->hasMany('App\EsosasPreces'); 
    }
}
