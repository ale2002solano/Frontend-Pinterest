<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest Feed</title>
    <link rel="stylesheet" href="{{ asset('css/prueba.css') }}">
</head>
<body style="background-color: black; margin: 0; padding: 0;">

    <header>
        <div class="navbar">
            <div class="links">
                <a href="#">Todos</a>
                <a href="#">Ropa</a>
                <a href="#">Libros</a>
            </div>
        </div>
    </header>

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

    <footer id="footer">
        <div class="footer2">
            <div class="item2"> <a href="{{ url('/feed') }}"> <i class="fa-solid fa-house fa-lg"></i> </a> </div>
            <div class="item2"> <a href="{{ url('/buscarideas') }}"> <i class="fa-solid fa-magnifying-glass fa-lg"></i></a></div>
            <div class="item2"><i id="openModalBtn" class="fa-duotone fa-solid fa-plus fa-lg"></i></div>
            <div class="item2"> <a href="{{ route('mensajeria') }}"> <i class="fa-solid fa-comment-dots fa-lg"></i> </a> </div>
            <div class="item2"> <a href="{{ route('tableros') }}"> <img src="../img/ini1.jpg" alt="" id="avatar"> </a></div>
        </div>
    </footer>

    <script src="{{ asset('js/feed.js') }}"></script>
</body>
</html>