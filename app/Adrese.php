<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adrese extends Model
{
    public function piegadatajs() {
        return $this->hasMany('App\Piegadatajs');
    }
    public function persona() {
        return $this->hasMany('App\Persona');
    }
}
