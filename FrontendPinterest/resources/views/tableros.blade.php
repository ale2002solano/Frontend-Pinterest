<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableros</title>
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>
    <header>
        <nav>

            <div class="ll" id="perfil-narvar" onclick="window.location.href='{{ url('/configuracion') }}'">O</div>

            <div class="ll" href="#Pines"> <a href="{{route('pines')}}"> Pines </a></div>
            <div class="ll" href="#Tableros">Tableros</div>
            <div class="ll" ></div>

        </nav>
    </header>

    <div class="post-nav">
    <div class="search-box">
        <input type="text" placeholder="Buscar...">
    </div>
    <div class="other-box">
        <i class="fa-solid fa-plus" onclick="window.location.href='{{ url('/compartir') }}'"></i>
    </div>
    </div>



    <div class="flex-container">
        <button><i class="fa-solid fa-arrow-up-long"></i><i class="fa-solid fa-arrow-down-long"></i> <i class="fa-solid fa-angle-down"></i></button>
        <button>Grupo</button>
        <button>Secreto</button>
        
    </div>

   

    <div class="container" >
       
      <div class="container-galerias" id="not">

        <div class="dividir" > 
           
            <div id="album-fotos"> 

                <div class="main-photo">
                    <img src="img/img1.jpeg" alt="Foto 1">
                </div>
                <div class="side-photos">
                    <div class="side-photo">
                        <img src="img/img2.jpeg" alt="Foto 2">
                    </div>
                    <div class="side-photo">
                        <img src="img/img3.jpeg"  alt="Foto 3">
                    </div>
                </div>
               

            </div>

            <div id="describir">
                 <div>Ropa</div>
                 <div>55 Pines</div>

            </div>

        </div>
        
      </div>

    </div>

    <div id="modalOverlay" class="modal-overlay">
        <div id="modal" class="modal">
            <div class="modal-header">
                <button id="closeModalBtn" class="close-btn">X</button>
                <h2>Comienza a crear ahora</h2>
            </div>
            <div class="casillas">
                <div class="casilla2">
                    <div class="contenido3"><i class="fa-solid fa-thumbtack" style="color: #474747;"></i></i></div>
                    <p>Pin</p>
                </div>
                <div class="casilla2">
                    <div class="contenido3"><i class="fa-solid fa-house fa-lg"></i></div>
                    <p>Collage</p>
                </div>
                <div class="casilla2">
                    <div class="contenido3"><i class="fa-solid fa-house fa-lg"></i></div>
                    <p>Tablero</p>
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
            <div class="item2"> <a href="{{route('tableros')}}"> O </a></div>


        </div>
      
    </footer>
</body>
<script src="./java/index.js" ></script>
</html>