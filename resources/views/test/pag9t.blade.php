@extends('layouts.plantilla')
@section('titulo')
   Test
@endsection

@section('principal')

   <div class="central">
      <h2>Test</h2>
      <div class="warning">


      <p>Esta es la version abreviada del Test, si no esta seguro del resultado, le sugerimos hacer el <a href="/fulltest">TEST COMPLETO</a></p>
      </div>
      <img src="/storage/barraProgreso8.png" alt="">
      <form class="form" action="/devolucion1" method="post">
         {{ csrf_field() }}
         @foreach ($req->request as $re)
            <input type="hidden" name='pregunta {{$re}}' value={{$re}}>
         @endforeach
         @foreach ($preguntas as $pregunta)
           <div class="contenedor_pregunta">
             <div class="input">
               <input type="checkbox" name="pregunta{{$pregunta->id}}" value={{$pregunta->id}}>
             </div>
             <div class="chek">
              <label for="pregunta{{$pregunta->id}}"> {{$pregunta->id .') '. $pregunta->pregunta}}</label>
             </div>
           </div>
         @endforeach
         <button type="submit" name="button">Siguiente</button>
      </form>
   </div>

@endsection
