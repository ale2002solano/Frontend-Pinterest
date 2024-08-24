<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu cuenta</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="../css/configuracion.css">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="header bg-black text-white text-center py-2 position-relative">
            <span class="position-absolute top-0 start-0 p-3" style="top: 20px; left: 20px;"><i class="fas fa-chevron-left text-white"></i></span>
            <h6 class="m-0" style="font-size: 1rem; padding-top: 40px;">Tu cuenta</h6>
        </div>
        <div class="profile-section d-flex align-items-center p-3 bg-black text-white mt-3">
            <div class="profile-image bg-secondary rounded-circle d-flex align-items-center justify-content-center">
                <span class="text-white">P</span>
            </div>
            <div class="ml-3">
                <h6 class="m-0 font-weight-bold">Perfil</h6>
                <small>Ver perfil</small>
            </div>
            <div class="ml-auto">
                <i class="fas fa-chevron-right text-white"></i>
            </div>
        </div>
        <div class="content-section bg-black text-white">
            <div class="settings-section p-3">
                <h6 class="text-muted">Configuración</h6>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Gestión de la cuenta
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Visibilidad del perfil
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Afinador del feed de inicio
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Cuentas conectadas
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Permisos sociales y actividad
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Notificaciones
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Privacidad y datos
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Centro para denuncias e infracciones
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                </ul>
            </div>
            <div class="login-section p-3">
                <h6 class="text-muted">Iniciar sesión</h6>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Añadir cuenta
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Seguridad
                        <i class="fas fa-chevron-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Sé un probador beta
                        <i class="fas fa-arrow-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Cerrar sesión
                    </li>
                </ul>
            </div>
            <div class="assistance-section p-3">
                <h6 class="text-muted">Asistencia</h6>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Centro de asistencia
                        <i class="fas fa-arrow-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Términos del servicio
                        <i class="fas fa-arrow-right text-muted font-weight-bold"></i>
                    </li>
                    <li class="d-flex align-items-center justify-content-between py-2 font-weight-bold">
                        Política de privacidad
                        <i class="fas fa-arrow-right text-muted font-weight-bold"></i>
                    </li>
                </ul>
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

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>