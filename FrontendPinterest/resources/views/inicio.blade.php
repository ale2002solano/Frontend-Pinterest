<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest Clone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/todo.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="links">
            <a href="#">Todos</a>
            <a href="#">Ropa</a>
            <a href="#">Libros</a>
           
        </div>
    </div>
    <div class="content" id="pin-container">
        <!-- Pines se cargarán aquí -->
    </div>
    <div class="bottom-nav">
        <a href="#"><i class="fas fa-home"></i></a>
        <a href="#"><i class="fas fa-search"></i></a>
        <a href="#"><i class="fas fa-plus"></i></a>
        <a href="#"><i class="fas fa-bell"></i></a>
        <a href="#"><i class="fas fa-user"></i></a>
    </div>

    <script src="{{ asset('js/inicio.js') }}"></script>
</body>
</html>