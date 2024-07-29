<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscarideas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/buscar.css">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="header text-center position-relative">
            <img src="img/e8614f5fec29989808e43836819511c4.jpg" class="img-fluid bg-image" alt="Looks con chalecos">
            <div class="search-wrapper d-flex align-items-center justify-content-center position-absolute">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="form-control search-input" placeholder="Busca ideas">
                <i class="fas fa-camera ml-2"></i>
            </div>
            <div class="overlay-text position-absolute text-center w-100" style="top: 50%; transform: translateY(-50%);">
                <p class="text-gray mb-1">Para todos los gustos</p>
                <h2 class="text-gray font-weight-bold">Looks con chalecos</h2>
            </div>
        </div>
        <div class="dots text-center mb-2">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="scrolling-content">
            <div class="main-content">
                <div class="ideas mb-2">
                    <h2 class="section-title text-center">Ideas de los creadores</h2>
                    <div class="ideas-container d-flex flex-nowrap overflow-auto">
                        <div class="idea flex-shrink-0 position-relative mr-2">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-circle position-absolute">
                                <div class="circle-img text-center">
                                    <span class="circle-text">P</span>
                                </div>
                            </div>
                            <div class="video-duration position-absolute">0:47</div>
                        </div>
                        <div class="idea flex-shrink-0 position-relative mr-2">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-circle position-absolute">
                                <div class="circle-img text-center">
                                    <span class="circle-text">P</span>
                                </div>
                            </div>
                            <div class="video-duration position-absolute">0:47</div>
                        </div>
                        <div class="idea flex-shrink-0 position-relative mr-2">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-circle position-absolute">
                                <div class="circle-img text-center">
                                    <span class="circle-text">P</span>
                                </div>
                            </div>
                            <div class="video-duration position-absolute">0:47</div>
                        </div>
                    </div>
                </div>
                <div class="ideas mb-2">
                    <h2 class="section-title text-center">Ideas para ti</h2>
                    <div class="ideas-container-grid">
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Tipos de ojos
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Trenzas fácil
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Tatuaje de tulipan
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Estilo preppy chic
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ideas mb-2">
                    <h2 class="section-title text-center">Populares en Pinterest</h2>
                    <div class="ideas-container-grid">
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Peinados elegantes
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Taper fade
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Outfits casuales
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Cortes de pelo hombre
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Dibujos sencillos
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded">
                            <div class="overlay-title position-absolute text-center">
                                Frases de amor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer bg-black py-2 fixed-bottom">
            <nav class="d-flex justify-content-around">
                <a href="#" class="text-muted"><i class="fas fa-home"></i></a>
                <a href="#" class="text-muted"><i class="fas fa-search"></i></a>
                <a href="#" class="text-muted"><i class="fas fa-plus"></i></a>
                <a href="#" class="text-muted"><i class="fas fa-comment-dots"></i></a>
                <a href="#" class="text-muted"><i class="fas fa-user"></i></a>
            </nav>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
