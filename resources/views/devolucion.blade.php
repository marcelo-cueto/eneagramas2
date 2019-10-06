@extends('layouts.plantilla')
@section('titulo')
  Test
@endsection

@section('principal')
  <div class="test">
    <h1><a href="/prueba">Hacer Test</a></h1>
  </div>
  <div class="central">
      <h1>Usted es {{$final}}</h1>
  </div>
  <div class="who">
    <h2>Autoras</h2>
    <div class="aut">
      <img src="/storage/monica.png" alt="">
      <div class="autp">
        <h3>Mónica Ivanissevich</h3>
        <p>Curiosa.<br>
            Innovadora.<br>
            Comprometida docente.<br>
            Empecinada lectora.<br>
            Alguien como alguien más,
            que se atrevió a escribir consul-
            tando autores “tan distintos y tan
            iguales”. Reescribiendo y corri-
            giendo el más leve guiño de una
            coma, hasta plasmar este libro en
            dueto, “juntas a la par”.</p>
      </div>
    </div>
    <div class="aut">
      <img src="/storage/jaqui.png" alt="">
      <div class="autp">
        <h3>Jaqueline Pels</h3>
        <p>Madre, amiga,
            investigadora,
            emprendedora.<br>
            Sensible, espiritual.<br>
            Amante de la naturaleza,
            de los silencios, de las buenas
            conversaciones, de la lectura,
            del arte, de cocinar. Convencida
            de que la vida es un intercambio
            permanente de regalos y que este
            libro, sin sus lectores no existe.
            lectores no existe.
          </p>
      </div>
    </div>
  </div>
@endsection
