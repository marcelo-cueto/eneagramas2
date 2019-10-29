@extends('layouts.plantilla')

@section('principal')
<div class="central">
  <h2>Descargue el Libro Aqui</h2>
  <div class="descarga">


  <iframe src="https://docs.google.com/viewer?url=localhost:8000/storage/eneagramasinteriorespdfinteractivo(1).pdf&embedded=true" width="600" height="780" style="border: none;"></iframe>
  <a href="/storage/eneagramasinteriorespdfinteractivo(1).pdf" download="Eneagramas">
  Descargar Archivo
  </a>
  </div>
</div>
@endsection
