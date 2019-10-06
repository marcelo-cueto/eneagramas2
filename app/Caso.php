<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{

    public $guarded=[];

    public function test(){
      return $this->hasMany('App\test','caso_id');
    }
}
