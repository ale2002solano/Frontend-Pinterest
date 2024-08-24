<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Ideas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/buscar.css">
</head>
<body>
    <div class="container-fluid p-0 d-flex flex-column min-vh-100">
        <!-- Header Section -->
        <div class="header text-center position-relative">
            <img src="img/e8614f5fec29989808e43836819511c4.jpg" class="img-fluid bg-image" alt="Looks con chalecos">
            <div class="search-wrapper d-flex align-items-center justify-content-center position-absolute">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="form-control search-input" placeholder="Buscar en Pinterest">
                <i class="fas fa-camera ml-2"></i>
            </div>
            <div class="overlay-text position-absolute text-center w-100" style="top: 50%; transform: translateY(-50%);">
                <p class="text-gray mb-1">Para todos</p>
                <h2 class="text-gray font-weight-bold">Looks con chalecos</h2>
            </div>
        </div>
        
        <!-- Dots Navigation -->
        <div class="dots text-center mb-2">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        
        <!-- Main Content -->
        <div class="scrolling-content flex-grow-1">
            <div class="main-content">
                <!-- Ideas de los Creadores Section -->
                <div class="ideas mb-2">
                    <h2 class="section-title text-center">Ideas de los creadores</h2>
                    <div class="ideas-container d-flex flex-nowrap overflow-auto">
                        <div class="idea flex-shrink-0 position-relative mr-2">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Idea 1">
                            <div class="video-duration position-absolute">0:47</div>
                        </div>
                        <div class="idea flex-shrink-0 position-relative mr-2">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Idea 2">
                            <div class="video-duration position-absolute">0:47</div>
                        </div>
                        <div class="idea flex-shrink-0 position-relative mr-2">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Idea 3">
                            <div class="video-duration position-absolute">0:47</div>
                        </div>
                    </div>
                </div>
                
                <!-- Ideas para ti Section -->
                <div class="ideas mb-2">
                    <h2 class="section-title text-center">Ideas para ti</h2>
                    <div class="ideas-container-grid">
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Tipos de ojos">
                            <div class="overlay-title position-absolute text-center">
                                Tipos de ojos
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Trenzas fácil">
                            <div class="overlay-title position-absolute text-center">
                                Trenzas fácil
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Tatuaje de tulipan">
                            <div class="overlay-title position-absolute text-center">
                                Tatuaje de tulipan
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Estilo preppy chic">
                            <div class="overlay-title position-absolute text-center">
                                Estilo preppy chic
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Populares en Pinterest Section -->
                <div class="ideas mb-2">
                    <h2 class="section-title text-center">Populares en Pinterest</h2>
                    <div class="ideas-container-grid">
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Peinados elegantes">
                            <div class="overlay-title position-absolute text-center">
                                Peinados elegantes
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Taper fade">
                            <div class="overlay-title position-absolute text-center">
                                Taper fade
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Outfits casuales">
                            <div class="overlay-title position-absolute text-center">
                                Outfits casuales
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Cortes de pelo hombre">
                            <div class="overlay-title position-absolute text-center">
                                Cortes de pelo hombre
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Dibujos sencillos">
                            <div class="overlay-title position-absolute text-center">
                                Dibujos sencillos
                            </div>
                        </div>
                        <div class="idea-grid position-relative">
                            <img src="img/R.jpeg" class="img-fluid rounded" alt="Frases de amor">
                            <div class="overlay-title position-absolute text-center">
                                Frases de amor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div id="modalOverlay" class="modal-overlay">
            <div id="modal" class="modal">
                <div class="modal-header">
                    <button id="closeModalBtn" class="close-btn">&times;</button>
                    <h2>Empieza a crear ahora</h2>
                </div>
                <div class="casillas">
                    <div class="casilla2">
                        <div class="contenido3">
                            <i class="fas fa-thumbtack icono"></i>
                        </div>
                        <p>Pin</p>
                    </div>
                    <div class="casilla2">
                        <div class="contenido3">
                            <i class="fas fa-cut icono"></i>
                        </div>
                        <p>Collage</p>
                    </div>
                    <div class="casilla2">
                        <div class="contenido3">
                            <i class="fas fa-columns icono"></i>
                        </div>
                        <p>Tablero</p>
                    </div>
                </div>
                <div class="modal-swipe-bar"></div>
            </div>
        </div>

        <!-- Footer Section -->
        <footer id="footer" class="mt-auto">
            <div class="footer2 d-flex justify-content-around align-items-center">
                <div class="item2"> 
                    <a href="{{ url('/feed') }}"> 
                        <i class="fa-solid fa-house fa-lg"></i> 
                    </a> 
                </div>
                <div class="item2">
                    <a href="#"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a>
                </div>
                <div class="item2">
                    <a href="#"><i id="openModalBtn" class="fa-duotone fa-solid fa-plus fa-lg"></i></a>
                </div>
                <div class="item2"> 
                    <a href="{{route('mensajeria')}}"> 
                        <i class="fa-solid fa-comment-dots fa-lg"></i> 
                    </a> 
                </div>
                <div class="item2"> 
                    <a href="{{route('tableros')}}"> 
                        <img src="../img/ini1.jpg" alt="Avatar" id="avatar"> 
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/buscar.js') }}"></script>
</body>
</html>
