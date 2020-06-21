<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piegadatajs extends Model
{
    public function adreses() {
        return $this->belongsTo('App\Adrese');
    }
    public function pardotie() {
        return $this->hasMany('App\Pardotie');
    }
    public function esosas_preces() {
        return $this->hasMany('App\EsosasPreces');
    }
}

