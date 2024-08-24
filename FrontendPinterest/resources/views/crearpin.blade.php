<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pin</title>
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/crearpin.css">
<body>
    <div class="container-fluid">
        
        <div class="header-container">
            <i class="fas fa-chevron-left"></i>
            <h5>Crear Pin</h5>
        </div>

        
        <div class="content-section">
            <div class="text-center">
                <div class="pin-placeholder">
                    <i class="fas fa-pencil-alt"></i>
                </div>
            </div>

            <div class="container mb-3">
                <label for="titulo" class="form-label text-muted">Título</label>
                <h6 id="titulo" class="text-white">Explica en qué consiste tu Pin</h6>
                <hr>
            </div>

            <div class="container mb-3">
                <label for="descripcion" class="form-label text-muted">Descripción</label>
                <p id="descripcion" class="text-muted">Añade una descripción, mención o hashtags a tu Pin.</p>
                <hr>
            </div>

            <div class="container mb-3">
                <label for="enlace" class="form-label text-muted">Enlace</label>
                <p id="enlace" class="text-muted">Añade el enlace aquí</p>
                <hr>
            </div>

            <div class="container mb-3">
                <div class="align-middle">
                    <p class="text-white mb-0">Elegir un tablero</p>
                    <p class="text-muted mb-0">Perfil <i class="fas fa-chevron-right"></i></p>
                </div>
            </div>

            <div class="container mb-3">
                <div class="align-middle">
                    <p class="text-white mb-0">Etiquetar temas relacionados</p>
                    <i class="fas fa-chevron-right text-muted"></i>
                </div>
            </div>

            <div class="container mb-4">
                <div class="align-middle">
                    <p class="text-white mb-0">Configuración avanzada</p>
                    <i class="fas fa-chevron-right text-muted"></i>
                </div>
            </div>
        </div>

        
        <footer>
            <div class="footer-container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="footer-left d-flex align-items-center">
                        <div class="rounded-circle bg-light text-dark mr-2">
                            <i class="fas fa-folder"></i>
                        </div>
                        <div class="rounded-circle bg-light text-dark">
                            <i class="fas fa-download"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger">Crear</button>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
