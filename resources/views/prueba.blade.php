@extends('layouts.plantilla')
@section('titulo')
  Test de Personalidad
@endsection

@section('principal')


  <div class="central">
    <h2>Test de Personalidad</h2>
    <div class="warning">


    <p>Esta es la version abreviada del Test, si no esta seguro del resultado, le sugerimos hacer el <a href="/fulltest">TEST COMPLETO</a></p>
    </div>
    <form class="form" action="/devolucion" method="POST">
       {{ csrf_field() }}
      @foreach ($preguntas as $pregunta)
        <div class="">
        <div class="check">
          <input type="checkbox" name="pregunta{{$pregunta->id}}" value="{{$pregunta->id}}">
        </div>
        <div class="check">
          <label for="pregunta {{$pregunta->id}}">{{$pregunta->id . ' '. $pregunta->pregunta}}</label>
          <br>
        </div>
        </div>
      @endforeach

      <button type="submit" name="button">Averigualo</button>
    </form>




  </div>
@endsection
