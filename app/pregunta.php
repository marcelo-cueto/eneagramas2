<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
  public $guarded=[];

  public function test(){
    return $this->hasMany('App\test','pregunta_id');
  }
}
