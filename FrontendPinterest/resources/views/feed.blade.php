<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest</title>
    
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/feed.css">
</head>
<body style="background-color: black; margin: 15px;">
<body>

    <header>

        
    <div class="content">
        <!-- Pines de ejemplo -->
        <div class="pin">
            <img src="https://via.placeholder.com/300" alt="Pin Image">
            <div class="pin-description">
                <p>Descripción del Pin 1</p>
            </div>
        </div>
        <div class="pin">
            <img src="https://via.placeholder.com/300" alt="Pin Image">
            <div class="pin-description">
                <p>Descripción del Pin 2</p>
            </div>
        </div>
        <div class="pin">
            <img src="https://via.placeholder.com/300" alt="Pin Image">
            <div class="pin-description">
                <p>Descripción del Pin 3</p>
            </div>
        </div>

        <div class="pin">
            <img src="https://via.placeholder.com/300" alt="Pin Image">
            <div class="pin-description">
                <p>Descripción del Pin 4</p>
            </div>
        </div>

        <div class="pin">
            <img src="https://via.placeholder.com/300" alt="Pin Image">
            <div class="pin-description">
                <p>Descripción del Pin 5</p>
            </div>
        </div>

        <div class="pin">
            <img src="https://via.placeholder.com/300" alt="Pin Image">
            <div class="pin-description">
                <p>Descripción del Pin 6</p>
            </div>
        </div>
    </div>
        
   <div class="notification">
  <div class="avatar" ></div>
  <div class="info">
   
  </div>
  <div class="time"></div>
  
  <div id="modalOverlay" class="modal-overlay">
    <div id="modal" class="modal">
        <div class="modal-header">
            <button id="closeModalBtn" class="close-btn">&times;</button>
            <h2>Empieza a crear ahora</h2>
        </div>
        <div class="casillas">
            <div class="casilla2">
                <div class="contenido3">
                    <i class="fas fa-thumbtack icono"></i>
                </div>
                <p>Pin</p>
            </div>
            <div class="casilla2">
                <div class="contenido3">
                    <i class="fas fa-cut icono"></i>
                </div>
                <p>Collage</p>
            </div>
            <div class="casilla2">
                <div class="contenido3">
                    <i class="fas fa-columns icono"></i>
                </div>
                <p>Tablero</p>
            </div>
        </div>
        <div class="modal-swipe-bar"></div>
    </div>
    </div>



    <footer id="footer">

        <div class="footer2">

            <div class="item2"> <a href="{{ url('/feed') }}"> <i class="fa-solid fa-house fa-lg"></i> </a> </div>
            <div class="item2"> <a href="{{ url('/buscarideas') }}"> <i class="fa-solid fa-magnifying-glass fa-lg"></i></a></div>
            <div class="item2"><i   id="openModalBtn" class="fa-duotone fa-solid fa-plus fa-lg"></i></div>
            <div class="item2"> <a href="{{route('mensajeria')}}"> <i class="fa-solid fa-comment-dots fa-lg"></i> </a> </div>
            <div class="item2"> <a href="{{route('tableros')}}"> <img src="../img/ini1.jpg" alt="" id="avatar"> </a></div>

        </div>
      
    </footer>

    <script src="{{ asset('js/feed.js') }}"></script>
</body>
</html>
