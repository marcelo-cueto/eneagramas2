@extends('layouts.plantilla')
@section('titulo')
  Test
@endsection

@section('principal')

  <div class="central">
     <ul class="resultadoTest">
        <li>Eneatipo 1: {{round($porcentajes[0], 0, PHP_ROUND_HALF_DOWN)}} %</li>
        <li>Eneatipo 2: {{round($porcentajes[1], 0, PHP_ROUND_HALF_DOWN)}} %</li>
        <li>Eneatipo 3: {{round($porcentajes[2], 0, PHP_ROUND_HALF_DOWN)}} %</li>
        <li>Eneatipo 4: {{round($porcentajes[3], 0, PHP_ROUND_HALF_DOWN)}} %</li>
        <li>Eneatipo 5: {{round($porcentajes[4], 0, PHP_ROUND_HALF_DOWN)}} %</li>
        <li>Eneatipo 6: {{round($porcentajes[5], 0, PHP_ROUND_HALF_DOWN)}} %</li>
        <li>Eneatipo 7: {{round($porcentajes[6], 0, PHP_ROUND_HALF_DOWN)}} %</li>
        <li>Eneatipo 8: {{round($porcentajes[7], 0, PHP_ROUND_HALF_DOWN)}} %</li>
        <li>Eneatipo 9: {{round($porcentajes[8], 0, PHP_ROUND_HALF_DOWN)}} %</li>
     </ul>

  </div>

@endsection
