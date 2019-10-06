<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
  public $table='preguntas_respuestas';
  public $guarded=[];

  public function test(){
    return $this->belongTo('App\Caso','caso_id');
  }
  public function test(){
    return $this->belongTo('App\pregunta','pregunta_id');
  }
  public function test(){
    return $this->belongTo('App\respuesta','respuesta_id');
  }
}
