@extends('layouts.plantilla')
@section('titulo')
  Home
@endsection

@section('principal')
  <div class="test">
    <h1><a href="/prueba">Hacer Test</a></h1>
  </div>
  <div class="central">
    <h1>Como es el EL UNO</h1>
    <p>El UNO es “el idealista”. Su energía se canaliza en el esfuerzo por mejorar la
      realidad, tanto dentro como fuera de sí mismo y así contribuir crear un orden
      moral. Siente visceralmente la lucha entre lo correcto y lo incorrecto, siempre
      basándose en parámetros internos. Le resulta difícil aceptar las imperfecciones
      propias y ajenas porque las vincula con la posibilidad de la aceptación o del
      rechazo.
    </p>
    <p>
      Siente que la vida es dura, que la comodidad debe ganarse a pulmón y
      que la gratificación debe postergarse, hasta haber hecho lo que corresponde.
      Esta actitud lo lleva a esforzarse más que el promedio. Asimismo, se niega los
      placeres, puesto que la virtud es la propia recompensa. Este esfuerzo adicio-
      nal, cuando no es reconocido, genera resentimiento o enojo. Del mismo modo,
      cuando el ideal y la realidad no condicen, se irrita casi automáticamente sin
      tiempo de controlar su malestar frente a la situación.
    </p>
    <p>
      Tiende a racionalizar las casusas que provocan su enojo, lo cual le per-
      mite justificarlo e, incluso, negarlo. Asimismo, si se permite un gusto, siente
      que debe fundamentarlo ante sí mismo y ante los demás.
    </p>
    <p>
      Es una persona ética, productiva, ordenada, idealista y auto-disciplina-
      da. Si lo definiera una frase, ésta sería:<i> “ Tengo razón; no me equivoco. Si
      los demás se parecieran a mí, todo sería mejor (correcto) ”</i>. Sin embargo,
      también puede ser perfeccionista, híper-critica, dominante y exigente.
    </p>

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
