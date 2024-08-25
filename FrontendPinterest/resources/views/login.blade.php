<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d7073a8296.js" crossorigin="anonymous"></script>
    <title>Inicio sesion</title>
</head>

<body style="background-color: black;">
    <!-- Logo pinterest -->
<div class="logo"><img src="../img/pinterest-logo.png" id="logo"></div>

    <!--contenedor principal imagenes de fondo-->
    <div class="contfondo">
        <div class="foto"><img class="responsive" src="../img/ini3.jpg" alt=""><div class="descp"><div class="user"><i class="fa-solid fa-circle-user"></i> Username</div><i class="fa-solid fa-ellipsis"></i></div></div>
        <div class="foto"><img class="responsive" src="../img/ini2.jpg" alt=""><div class="descp"><div class="user"><i class="fa-solid fa-circle-user"></i> Username</div><i class="fa-solid fa-ellipsis"></i></div></div>
        <div class="foto"><img class="responsive" src="../img/ini1.jpg" alt=""><div class="descp"><div class="user"><i class="fa-solid fa-circle-user"></i> Username</div><i class="fa-solid fa-ellipsis"></i></div></div>
        <div class="foto"><img class="responsive" src="../img/ini4.jpg" alt=""><div class="descp"><div class="user"><i class="fa-solid fa-circle-user"></i> Username</div><i class="fa-solid fa-ellipsis"></i></div></div>
    </div>
    <!-- Contenedor login -->
    <div class="contlog">
        <div class="logform">
        <p class="head">Te damos la bienvenida a Pinterest</p>

            <form action="" method="" id="logform">
                <input type="email" name="correo" placeholder="Correo" required><br>
                <input type="password" name="contrasenia" placeholder="Contraseña" required><br>
                <input type="button" value="Continuar" class="boton" onclick="redirectToFeed()">
            </form>

        </div>
        <div class="crear">
            <p>¿No tienes una cuenta?</p>
            <a href="register" style="color: gray;">Regístrate</a><br>
            <p>Al continuar, aceptas las <span id="blue">Condiciones de servicio</span> de Pinterest y reconoces que leíste nuestra <span id="blue">Política de privacidad</span>. <span id="blue">Aviso de recopilación de información</span>.</p>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>


<script>
        function redirectToFeed() {
            window.location.href = "{{ url('/feed') }}";
        }
    </script>
</body>

</html>