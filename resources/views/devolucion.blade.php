@extends('layouts.plantilla')
@section('titulo')
   Resultado Test de Personalidad
@endsection

@section('principal')

  <div class="central">
    <h2>Resultado</h2>
      <img src="/storage/eneagrama.png" alt= 300px usemap="#mapaEneagrama">
      <map name="mapaEneagrama">
         <area shape="circle" coords="496, 120, 35" href="mirarme/eneatipo1" alt="EL UNO" title='puto el que lee'>
         <area shape="circle" coords="591, 282, 35" href="mirarme/eneatipo2" alt="EL DOS">
         <area shape="circle" coords="557, 467, 35" href="mirarme/eneatipo3" alt="EL TRES">
         <area shape="circle" coords="416, 587, 35" href="mirarme/eneatipo4" alt="EL CUATRO">
         <area shape="circle" coords="227, 587, 35" href="mirarme/eneatipo5" alt="EL CINCO">
         <area shape="circle" coords="86, 467, 35" href="mirarme/eneatipo6" alt="EL SEIS">
         <area shape="circle" coords="51, 282, 35" href="mirarme/eneatipo7" alt="EL SIETE">
         <area shape="circle" coords="144, 120, 35" href="mirarme/eneatipo8" alt="EL OCHO">
         <area shape="circle" coords="320, 56, 35" href="mirarme/eneatipo9" alt="EL NUEVE">
      </map>

  </div>

@endsection
