<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PardotieUnBojatie extends Model
{
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
