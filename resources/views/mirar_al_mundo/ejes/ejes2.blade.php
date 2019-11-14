@extends('layouts.plantilla')
@section('titulo')
   Home
@endsection

@section('principal')

   <div class="central">
      <h2>Ejes del DOS</h2>
      <div>
         <img src="/storage/ejes2.png" class="img_enea" usemap="#mapaEneagrama">
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
      <p>El DOS y el SEIS constituyen el <i>eje de la relación</i>. El SEIS es el “confiable”
         y se caracteriza básicamente por colaborar y trabajar en equipo. Ayuda al DOS
         no sólo a dar sino también a recibir. El DOS y el SIETE comparten el <i>eje de la
         comunicación</i>, se brindan a los otros. El SIETE es “el optimista”, se apasiona por
         cuanto hay de interesante en cada persona y ayuda a los demás a ver y disfrutar
         la parte hermosa y positiva de la vida. El SIETE le trae al DOS la posibilidad de
         pasar de implicarse a divertirse.
      </p>
      <ol>
         <li><a href="/mirar_al_mundo/ejes/ejes1">Ejes del UNO</a></li>
         <li><a href="/mirar_al_mundo/ejes/ejes">Ejes </a></li>
         <li><a href="/mirar_al_mundo/ejes/ejes3">Ejes del TRES</a></li>
         <li><a href="/mirar_al_mundo/ejes/ejes4">Ejes del CUATRO</a></li>
         <li><a href="/mirar_al_mundo/ejes/ejes5">Ejes del CINCO</a></li>
         <li><a href="/mirar_al_mundo/ejes/ejes6">Ejes del SEIS</a></li>
         <li><a href="/mirar_al_mundo/ejes/ejes7">Ejes del SIETE</a></li>
         <li><a href="/mirar_al_mundo/ejes/ejes8">Ejes del OCHO</a></li>
         <li><a href="/mirar_al_mundo/ejes/ejes9">Ejes del NUEVE</a></li>
      </ol>
   </div>
@endsection
