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
            <div class="ll" href="#Pines">Pines</div>
            <div class="ll" href="#Tableros"> <a href="{{route('tableros')}}"> Tableros </a></div>
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

    <div class="contfondo">
        <div class="foto"><img class="responsive" src="../img/ini3.jpg" alt=""><div class="descp"><div class="user"><i class="fa-solid fa-circle-user"></i> Username</div><i class="fa-solid fa-ellipsis"></i></div></div>
        <div class="foto"><img class="responsive" src="../img/ini2.jpg" alt=""><div class="descp"><div class="user"><i class="fa-solid fa-circle-user"></i> Username</div><i class="fa-solid fa-ellipsis"></i></div></div>
        <div class="foto"><img class="responsive" src="../img/ini1.jpg" alt=""><div class="descp"><div class="user"><i class="fa-solid fa-circle-user"></i> Username</div><i class="fa-solid fa-ellipsis"></i></div></div>
        <div class="foto"><img class="responsive" src="../img/ini4.jpg" alt=""><div class="descp"><div class="user"><i class="fa-solid fa-circle-user"></i> Username</div><i class="fa-solid fa-ellipsis"></i></div></div>
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
            <div class="item2"> <a href="{{ url('/buscarideas') }}"> <i class="fa-solid fa-magnifying-glass fa-lg"></i> </a> </div>
            <div class="item2"><i id="openModalBtn" class="fa-duotone fa-solid fa-plus fa-lg"></i></div>
            <div class="item2"> <a href="{{route('mensajeria')}}"> <i class="fa-solid fa-comment-dots fa-lg"></i> </a> </div>
            <div class="item2"> <a href="{{route('tableros')}}"> <img src="../img/ini1.jpg" alt="Avatar" id="avatar"> </a> </div>
        </div>
    </footer>
</body>
<script src="./java/pines.js"></script>
</html>
