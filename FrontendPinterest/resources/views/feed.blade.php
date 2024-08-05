<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest Clone</title>
    
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/feed.css">
</head>
<body style="background-color: black; margin: 15px;">
<body>

    <header>

        <div class="navbar">
            <div class="links">
                <a href="#">Todos</a>
                <a href="#">Ropa</a>
                <a href="#">Libros</a>
               
            </div>
        </div>

    </header>
   
    <div class="content" id="pin-container">
        <!-- Pines se cargarán aquí -->

        @foreach($images as $image)
        <div class="pin">
            <img src="{{ asset('img/' . basename($image)) }}" alt="Image">
            <div class="content">
         
                <p>Descripción del Pin</p>
            </div>
        </div>
    @endforeach
    </div>
        
   <div class="notification">
  <div class="avatar" ></div>
  <div class="info">
   
  </div>
  <div class="time"></div>
  
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

        <div class="item2"> <a href="{{ url('/feed') }}"> <i class="fa-solid fa-house fa-lg"></i> </a> </div>
            <div class="item2"><i class="fa-solid fa-magnifying-glass fa-lg"></i></div>
            <div class="item2"><i   id="openModalBtn" class="fa-duotone fa-solid fa-plus fa-lg"></i></div>
            <div class="item2"> <a href="{{route('mensajeria')}}"> <i class="fa-solid fa-comment-dots fa-lg"></i> </a> </div>
            <div class="item2"> <a href="{{route('configuracion')}}"> <img src="../img/ini1.jpg" alt="" id="avatar"> </a></div>

        </div>
      
    </footer>

    <!--<script src="{{ asset('js/feed.js') }}"></script>-->
</body>
</html>