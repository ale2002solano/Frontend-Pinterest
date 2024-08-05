<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/pines.css">
    <link rel="stylesheet" href="{{ asset('css/pines.css') }}">
</head>
<body>
    <header>
        <nav>

            <div class="ll" id="perfil-narvar" href="#Profile">O</div>
            <div class="ll" href="#Pines">Pines</div>
            <div class="ll" href="#Tableros"> <a href="{{route('tableros')}}"> Tableros </a></div>
            <div class="ll" ></div>

        </nav>
    </header>

    <div class="post-nav">
        <div class="search-box">
            <input type="text" placeholder="Buscar...">
        </div>
        <div class="other-box">
            <i class="fa-solid fa-plus"></i>
        </div>

    </div>


    <div class="flex-container">
        <button><i class="fa-solid fa-grid"></i> <i class="fa-solid fa-angle-down"></i></button>
        <button> <i class="fa-solid fa-star"></i>  Favoritos</button>
        <button>Creados por ti</button>
        
    </div>

   

    <div class="container" >
       
        <div class="contenedor" id="westcol" >
            <div class="columna" id="west">
                <div class="casilla pequena">Casilla 1</div>
                <div class="casilla mediana">Casilla 2</div>
                <div class="casilla grande">Casilla 3</div>
                <div class="casilla pequena">Casilla 4</div>
                <div class="casilla mediana">Casilla 5</div>
                <div class="casilla grande">Casilla 6</div>
                <div class="casilla pequena">Casilla 7</div>
                <div class="casilla mediana">Casilla 8</div>
                <div class="casilla grande">Casilla 9</div>
                <div class="casilla pequena">Casilla 10</div>


            </div>
            <div class="columna" id="west2">Columna 2</div>
            <div class="columna" id="west3">Columna 3</div>
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
            <div class="item2"> <a href="{{route('configuracion')}}"> O </a></div>
        </div>
      
    </footer>
</body>
<script src="./java/pines.js" ></script>
</html>