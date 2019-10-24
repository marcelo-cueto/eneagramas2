@extends('layouts.plantilla')
@section('titulo')
  Test de Personalidad
@endsection

@section('principal')


  <div class="central">
    <h2>Test de Personalidad</h2>
    <form class="form" action="/devolucion" method="POST">
       {{ csrf_field() }}
      @foreach ($preguntas as $pregunta)
        <div class="chek">
          <input type="checkbox" name="pregunta{{$pregunta->id}}" value="{{$pregunta->id}}">
        </div>
        <div class="quest">
          <label for="pregunta {{$pregunta->id}}">{{$pregunta->id . ' '. $pregunta->pregunta}}</label>
          <br>
        </div>
      @endforeach

      <button type="submit" name="button">Averigualo</button>
    </form>

      {{$preguntas->render()}}


  </div>
@endsection
