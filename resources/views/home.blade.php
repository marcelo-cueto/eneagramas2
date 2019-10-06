@extends('layouts.plantilla')
@section('titulo')
  Home
@endsection

@section('principal')
  <div class="test">
    <h1><a href="/prueba">Hacer Test</a></h1>
  </div>
  <div class="central">
    <h1>QUE ES EL ENEAGRAMA</h1>
    <p>La palabra eneagrama proviene del griego y significa figura de nueve (ennea)
      puntos (gramma). La figura es una estrella de nueve puntas inscripta en un cír-
      culo. El círculo representa la unicidad; cada punto de la estrella simboliza una
      manifestación concreta y parcial de ese total: un eneatipo. Las líneas internas
      de la figura muestran la vincularidad entre los distintos eneatipos, constituyen-
      do un mapa con una dinámica interior, un camino, un itinerario a recorrer.</p>
    <p>Esencialmente, el eneagrama es un sistema de tipologías que nos ayu-
      da a reconocer aquello que ya sabemos sobre nosotros mismos y a conocer el
      propósito que tiene vincularnos con los otros eneatipos.</p>
    <p>Su finalidad es visualizar cómo cada eneatipo recibe de los otros, al mismo
      tiempo que brinda, en un proceso continuo de autoconocimiento, cambio y
      transformación. Al vincularnos con cada punto del círculo, nos enriquecemos
      y abrazamos la diversidad, conectándonos con la totalidad y la unicidad.</p>
    <p>El conocimiento del eneagrama nos vuelve humildes, porque recono-
      cemos que nuestro eneatipo es “uno de nueve” y responsables, porque acep-
      tamos la tarea que nuestro eneatipo debe realizar en beneficio nuestro y el de
      quienes nos rodean.</p>
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
