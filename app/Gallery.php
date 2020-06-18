<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = "gallery";
    public function users() {
        return $this->hasMany('App\User'); 
    }
 
}
