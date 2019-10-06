<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
  public $guarded=[];

  public function test(){
    return $this->hasMany('App\test','respuesta_id');
  }
}
