<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EsosasPreces extends Model
{
    public function pardotie_un_bojatie() {
        return $this->hasMany('App\PardotieUnBojatie');
    }
    public function ziedu_glab_apstakli() {
        return $this->belongsTo('App\ZieduGlabApstakli');
    }
     public function piegadatajs() {
        return $this->belongsTo('App\Piegadatajs');
    }
}
