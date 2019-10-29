@extends('layouts.plantilla')

@section('principal')
  <div class="central">

    @if (Auth::user()->collection_status=='approved')
      <h2>Descargue el Libro Aqui</h2>
      <div class="descarga">

      <a href="/storage/eneagramasinteriorespdfinteractivo(1).pdf" download="Eneagramas">
      Descargar Ebook
      </a>
      </div>

  @elseif ( Auth::user()->collection_status=='error')
      <h2>Elija el Metodo de Pago</h2>
      <div class="pago">
        <a href="/checkout/preferences"><img src="/storage/mercadopago.jpg" alt=""></a>
        <a href="/paypal"><img src="/storage/paypal.jpg" alt=""></a>
      </div>

  @else
    <h2>Su compra esta aguardando confirmacion</h2>

@endif




</div>
@endsection
