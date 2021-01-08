<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="icon" type="image/png" href="../Imagenes/ico_perspective02.ico"/>
  <title>Contacto</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../CSS/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../CSS/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="purple nav-wrapper" role="navigation">
    <div>
    <div class="nav-wrapper container">
      <a class="brand-logo left black-text" href="../html/home.html"><i class="material-icons"><img id="logo" class="circle" src="../Imagenes/OJO_Halcon01.png"></i>Perspective Gaming</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="white-text" href="../html/home.html">Home</a></li>
        <li><a class="white-text" href="../html/juegos.html">Juegos</a></li>
        <li><a class="white-text" href="../html/posts.html">Posts</a></li>
        <li class="active"><a class="white-text" href="../html/contacto.html">Contacto</a></li>
        <li><a class="white-text" href="../html/acercaDe.html">Acerca de</a></li>
      </ul>
    </div>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="../html/home.html">Home</a></li>
        <li><a href="../html/juegos.html">Juegos</a></li>
        <li><a href="../html/posts.html">Posts</a></li>
        <li class="active"><a href="../html/contacto.html">Contacto</a></li>
        <li><a href="../html/acercaDe.html">Acerca de</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
    <div class="col s5">
      <h1 class="center"><img src="../Imagenes/perfil.jpeg" alt="perfil" class="circle" width="250px" height="250px"></a>
      <h4 class="center">Daniel Peralta</h4>
      <p class="center">
        Fundador de Perspective, actualmente estudiante de la carrera de Ingenieria en ciencias de la computación en
        la Universidad Politécnica Salesiana.
      </p>
      <h5 class="center">Destrezas</h5>
      <p>
        <i class="material-icons">grade</i>QA tester de videojuegos.
      </p>
      <p>
        <i class="material-icons">build</i>Aprendiendo sobre Game Design, Marketing de videojuegos, UX/UI, Modelado 3D, Animcación 2D,3D.
      </p>
      <p>
        <i class="material-icons">games</i>Desarrollador de videojuegos.
      </p>
    </div>
    <div class="col s7">

      <br>
      <h3>Contáctame</h3>
      <p>Agrega tu nombre, tu correo y una descripción de tu proyecto y me pondré en contacto contigo.</p>
      <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
          <div class="row center">
            <?php
            $myemail = 'perspectivetesting033@gmail.com';
            $name = $_POST['nombre'];
            $email = $_POST['email'];
            $message = $_POST['mensaje'];

            $to = $myemail;
            $email_subject = "Nuevo mensaje: $subject";
            $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
            $headers = "From: $email";

            mail($to, $email_subject, $email_body, $headers);
            echo "El mensaje se ha enviado correctamente :)";
            ?>
            <form method="POST" action="/contacto.php">
              <div class="container">
                <div class="input-field col s10">
                  <i class="material-icons prefix">person</i>
                  <input id="input_text" name="nombre" type="text" data-length="15">
                  <label class="black-text" for="input_text">Nombre</label>
                </div>
                <div class="input-field col s10">
                  <i class="material-icons prefix">contact_mail</i>
                  <input id="email" name="email" type="email" class="validate">
                  <label class="black-text" for="email">Correo</label>
                </div>
                <div class="input-field col s10">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="icon_prefix2" name="mensaje"class="materialize-textarea"></textarea>
                  <label class="black-text" for="icon_prefix2">Mensaje</label>
                </div>
                <button class="btn waves-effect grey darken-4 waves-light" type="submit" value="ENVIAR" name="ENVIAR">Enviar
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </form>

          </div>
        </div>
        <div class="parallax"><img src="https://images.unsplash.com/photo-1531346878377-a5be20888e57?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Unsplashed background img 2"></div>
      </div>

    </div>
  </div>
</div>

<footer class="page-footer purple darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Perspective Gaming</h5>
        <p class="grey-text text-lighten-4">
          Dedico mi tiempmo libre para trabajar como Freelancer en el campo de QA Testing de videojuegos,
          asesorias sobre Game Design y desarrollo de videojuegos.
        </p>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Menú</h5>
        <ul>
          <li><a class="white-text" href="../html/home.html">Home</a></li>
          <li><a class="white-text" href="../html/juegos.html">Juegos</a></li>
          <li><a class="white-text" href="../html/posts.html">Posts</a></li>
          <li><a class="white-text" href="../html/contacto.html">Contacto</a></li>
          <li><a class="white-text" href="../html/acercaDe.html">Acerca de</a></li>
        </ul>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Conecta</h5>
        <ul>

          <div class="chip">
            <img src="https://i.pinimg.com/564x/43/8e/fa/438efa02aca97783ef1a0db462800809.jpg" alt="Contact Person">
            <a href="https://twitter.com/Perspective033">Twitter</a>
          </div>
          <br>
          <div class="chip">
            <img src="https://i.pinimg.com/564x/72/f2/80/72f28035b6903975a9ad8cd65fbcfbdf.jpg" alt="Contact Person">
            <a href="https://www.instagram.com/perspective033/">Instagram</a>
          </div>
          <br>
          <div class="chip">
            <img src="https://i.pinimg.com/564x/60/00/5d/60005d802c2876c821bdab2bbdb9af2a.jpg" alt="Contact Person">
            <a href="https://www.youtube.com/channel/UCObw0qXSH5WwAXGPjyxdNKQ">Youtube</a>
          </div>
          <br>
          <div class="chip">
            <img src="https://i.pinimg.com/564x/44/9b/13/449b13424fcee07a3fa164a09f7bca0c.jpg" alt="Contact Person">
            <a href="discord.gg/2CScat">Discord</a>
          </div>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © Perspective Gaming
    </div>
  </div>
</footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../JS/materialize.js"></script>
    <script src="../JS/init.js"></script>

  </body>
</html>
