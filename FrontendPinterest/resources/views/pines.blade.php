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
            <div class="ll" href="#Tableros">Tableros</div>
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

    <footer>

        <div class="footer2">

            <div class="item2"> </div>
            <div class="item2"><i class="fa-solid fa-house"></i></div>
            <div class="item2"><i class="fa-solid fa-magnifying-glass"></i></div>
            <div class="item2"><i class="fa-duotone fa-solid fa-plus"></i></div>
            <div class="item2"><i class="fa-solid fa-comment-dots"></i></div>
            <div class="item2">O</div>
            <div class="item2"> </div>


        </div>
      
    </footer>  
</body>
<script src="./java/pines.js" ></script>
</html>