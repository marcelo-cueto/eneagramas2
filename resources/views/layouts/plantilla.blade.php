<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/baa6d0d275.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>@yield('titulo')</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="/home"><img src="/storage/eneagramaicon.png" alt=""> </a>
        <div class="logo">
          <i class="fas fa-bars" id='subnavbtn2'></i>
          <div class="enlaces">
            <div class="a">
              <button class="subnavbtn"><p> ENEATIPOS</p></button>
              <div class='subnav-content'>
                <a href="/mirarme/eneatipo1"> <p>El UNO - El Idealista</p></a>
                <a href="/mirarme/eneatipo2"><p>El DOS - El que da</p></a>
                <a href="/mirarme/eneatipo3"><p>El TRES - El exitoso</p></a>
                <a href="/mirarme/eneatipo4"><p>El CUATRO - El creativo</p></a>
                <a href="/mirarme/eneatipo5"><p>El CINCO - El observador</p></a>
                <a href="/mirarme/eneatipo6"><p>El SEIS - El confiable</p></a>
                <a href="/mirarme/eneatipo7"><p>El SIETE - El optimista</p></a>
                <a href="/mirarme/eneatipo8"><p>El OCHO - El líder</p></a>
                <a href="/mirarme/eneatipo9"><p>El NUEVE - El pacificador</p></a>
              </div>
            </div>
            <div class="a">
                <button class="subnavbtn"><p>MIS COMPLEMENTOS</p></button>
                <div class='subnav-content'>
                  <a href="/mirar_al_mundo/alas/alas"><p>ALAS</p></a>
                  <a href="/mirar_al_mundo/brazos/brazos"><p>BRAZOS</p></a>
                  <a href="/mirar_al_mundo/ciegos/ciegos"><p>PUNTOS CIEGOS</p></a>
                </div>
            </div>
            <div class="a">
              <button class="subnavbtn"><p>EL COMIENZO</p> </button>
              <div class='subnav-content'>
                <a href="/herida"> <p>EXPERIENCIA INTRAUTERINA- HERIDA PRIMARIA</p></a>
                <a href="/vincularidad"><p>CENTROS ENERGÉTICOS  - MECANISMO DE VINCULARIDAD</p></a>
                <a href="/energia"><p>FOCO DE LA ENERGÍA - MANEJO DE LA ENERGÍA</p></a>
                <a href="/distintiva"><p>NECESIDAD DISTINTIVA:</p></a>
              </div>
            </div>
            <div class="a">
              <button class="subnavbtn"><p>CAMINOS</p> </button>
              <div class='subnav-content'>
                <a href="/alejamiento/alejamiento"> <p>ALEJAMIENTO DE SI MISMO</p></a>
                <a href="/encuentro"><p>ENCUENTRO CONSIGO</p></a>
              </div>
            </div>
            <div class="a">
              <button class="subnavbtn"><p> MISION DE VIDA</p></button>
              <div class='subnav-content'>
                <a href="recibir1"> <p>RECIBIR</p></a>
                <a href="dar1"><p>DAR</p></a>
              </div>
            </div>

            </div>
          </div>
        </div>
      </nav>
    </header>
    <section>
      <div class="test">
        <h1><a href="/test">Test de Eneatipo</a></h1>
      </div>
      @yield('principal')
      <div class="test">
        <h1><a href=@php if (Auth::check()){
        if (Auth::user()->collection_status==NULL ) {
          echo '/compra';
        } else{
          echo '/download';
        }
      }else{
        echo "/auth/login";
      }

        @endphp>Comprar el libro</a></h1>
      </div>
    </section>
    <script src='/js/prueba.js'>

    </script>
  </body>
</html>
