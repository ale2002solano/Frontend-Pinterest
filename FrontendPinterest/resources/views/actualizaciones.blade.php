<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/act.css">
    <title>Actualizaciones</title>
</head>
<body style="background-color: black; margin: 15px;">
<header>
    <nav>
        <button class="active" onclick="activar(this)">Actualizaciones</button>
        <button class="active" onclick="activar(this)">Buzón de entrada</button>
    </nav>
   
</header>

<div class="content" id="pin-container">
    <!-- Pines se cargarán aquí -->
</div>

   <p class="txtdiv">Contactos</p>
   <div class="notification">
  <div class="avatar" ></div>
  <div class="info">
   
  </div>
  <div class="time"></div>

  <footer id="footer">

        <div class="footer2">

            <div class="item2"><i class="fa-solid fa-house fa-lg"></i></div>
            <div class="item2"><i class="fa-solid fa-magnifying-glass fa-lg"></i></div>
            <div class="item2"><i   id="openModalBtn" class="fa-duotone fa-solid fa-plus fa-lg"></i></div>
            <div class="item2"><i class="fa-solid fa-comment-dots fa-lg"></i></div>
            <div class="item2"><img src="../img/ini1.jpg" alt="" id="avatar"></div>

        </div>
      
    </footer>



  <script src="../js/act.js"></script>
</body>
</html>