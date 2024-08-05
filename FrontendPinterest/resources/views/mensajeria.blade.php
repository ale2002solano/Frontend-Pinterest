<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/msj.css">
    <title>Buzon de entrada</title>
</head>
<body style="background-color: black; margin: 15px;">
<header>
    <nav>
        <button class="active" onclick="activar(this)">Actualizaciones</button>
        <button class="active" onclick="activar(this)">Buzón de entrada</button>
    </nav>
    <!-- BARRA BUSCAR -->
    <div class="search-container">
        <button type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #787878;"></i></button>
        <input type="text" placeholder="Busca por nombre o correo" class="buscar">
    </div><br>
</header>

        <!-- MENSAJE NUEVO -->
    <div class="crear">
        <button class="icon"><i class="fa-solid fa-pen-to-square fa-lg" style="color: #ffffff;"></i></button>
        <div style="padding: 15px;">Mensaje nuevo</div>
    </div>

    <!-- SOLICITUDES -->
    <br><p class="txtdiv">Solicitudes</p>

    <div class="notification">
  <div class="avatar" style="background-image:url('../img/ini1.jpg'); background-size: cover;"></div>
  <div class="info">
    <p id="username">Lorely Colindres</p>
    <p id="cont-msj">Te envió un mensaje</p>
  </div>
  <div class="time">Hace 2 minutos</div>
</div>
<div class="actions">
    <button id="btn-vista">Vista previa</button>
    <button id="btn-eliminar">Eliminar</button>
  </div>

  <!-- MENSAJES -->
  <p class="txtdiv">Mensajes</p>
  <div class="notification">
  <div class="avatar" style="background-image:url('../img/ini1.jpg'); background-size: cover;"></div>
  <div class="info">
    <p id="username">Valeria Padilla</p>
    <p id="cont-msj">Hola ❤️</p>
  </div>
  <div class="time">Hace 2 minutos</div>
</div>

  <!-- CONTACTOS -->
   <p class="txtdiv">Contactos</p>
   <div class="notification">
  <div class="avatar" style="background-image:url('../img/ini1.jpg'); background-size: cover;"></div>
  <div class="info">
    <p id="username">Valeria Padilla</p>
    <p id="cont-msj">Envia un saludo👋</p>
  </div>
  <div class="time"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>

  
  <div id="modalOverlay" class="modal-overlay">
        <div id="modal" class="modal">
            <div class="modal-header">
                <button id="closeModalBtn" class="close-btn">X</button>
                <h2>Comienza a crear ahora</h2>
            </div>
            <div class="casillas">
                <div class="casilla2">
                    <div class="contenido3"></div>
                    <p>Nombre 1</p>
                </div>
                <div class="casilla2">
                    <div class="contenido3"></div>
                    <p>Nombre 2</p>
                </div>
                <div class="casilla2">
                    <div class="contenido3"></div>
                    <p>Nombre 3</p>
                </div>
            </div>
        </div>
    </div>

  <footer id="footer">

        <div class="footer2">

            <div class="item2"><i class="fa-solid fa-house fa-lg" style="color: #808080;"></i></div>
            <div class="item2"><i class="fa-solid fa-magnifying-glass fa-lg" style="color: #808080;"></i></div>
            <div class="item2"><i   id="openModalBtn" class="fa-duotone fa-solid fa-plus fa-lg" style="color: #808080;"></i></div>
            <div class="item2"><i class="fa-solid fa-comment-dots fa-lg" style="color: #808080;"></i></div>
            <div class="item2"><img src="../img/ini1.jpg" alt="" id="avatar"></div>

        </div>
      
    </footer>



  <script src="../js/mensajes.js"></script>
</body>
</html>