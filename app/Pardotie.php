<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pardotie extends Model
{
    public $table = "pardotie";

    public function esosas_preces() {
        return $this->belongsTo('App\EsosasPreces');
    }
    public function piegadatajs() {
        return $this->belongsTo('App\Piegadatajs');
    }
    public function persona() {
        return $this->belongsTo('App\Persona');
    }
}
