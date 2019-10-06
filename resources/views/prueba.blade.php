@extends('layouts.plantilla')
@section('titulo')
  Test
@endsection

@section('principal')
  <div class="test">
    <h1><a href="/prueba">Hacer Test</a></h1>
  </div>

  <div class="central">
    <h1>Test</h1>
    <form class="form" action="/devolucion" method="POST">
       {{ csrf_field() }}
      @foreach ($preguntas as $pregunta)
        <input type="checkbox" name="pregunta{{$pregunta->id}}" value="{{$pregunta->id}}">
        <label for="pregunta {{$pregunta->id}}">{{$pregunta->id . ' '. $pregunta->pregunta}}</label>
         <br>


      @endforeach
      <button type="submit" name="button">Averigualo</button>
    </form>
  </div>
  <div class="who">
    <h2>Autoras</h2>
    <div class="aut">
      <img src="/storage/monica.png" alt="">
      <div class="autp">
        <h3>Mónica Ivanissevich</h3>
        <p>Curiosa.
            Innovadora.
            Comprometida docente.
            Empecinada lectora.
            Alguien como alguien más,
            que se atrevió a escribir consul-
            tando autores “tan distintos y tan
            iguales”. Reescribiendo y corri-
            giendo el más leve guiño de una
            coma, hasta plasmar este libro en
            dueto, “juntas a la par”.
      </div>

    </div>
    <div class="aut">
      <img src="/storage/jaqui.png" alt="">
      <div class="autp">
        <h3>Jaqueline Pels</h3>
        <p>Madre, amiga,
            investigadora,
            emprendedora.
            Sensible, espiritual.
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
