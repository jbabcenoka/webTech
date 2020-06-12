<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piegadatajs extends Model
{
    public function adreses() {
        return $this->belongsTo('App\Adrese'); 
    }
    public function pardotie_un_bojatie() {
        return $this->hasMany('App\PardotieUnBojatie'); 
    }
    public function esosas_preces() {
        return $this->hasMany('App\EsosasPreces'); 
    }
}
