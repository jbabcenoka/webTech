<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZieduGlabApstakli extends Model
{
    public $table = "ziedu_glab_apstakli";
    public function esosas_preces() {
        return $this->hasMany('App\EsosasPreces'); 
    }
}
