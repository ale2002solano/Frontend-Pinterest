<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compartir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/compartir.css">
</head>
<body>
    <div class="content">
        <div class="share-dialog">
            <header class="d-flex justify-content-between align-items-center mb-4">
                <button class="close-button"><i class="fas fa-xmark" style="color: #ffffff;"></i></button>
                <h1 class="m-0 text-center flex-grow-1">Compartir</h1>
            </header>
            <div class="share-options d-flex overflow-auto mb-4">
                <div class="option text-center">
                    <div class="icon-circle bg-success">
                        <i class="fab fa-whatsapp fa-2x text-white"></i>
                    </div>
                    <span>WhatsApp</span>
                </div>
                <div class="option text-center">
                    <div class="icon-circle" style="background-color: #7ACD4A;">
                        <i class="fas fa-comment-dots fa-2x text-white"></i>
                    </div>
                    <span>Mensajes</span>
                </div>
                <div class="option text-center">
                    <div class="icon-circle bg-primary">
                        <i class="fab fa-facebook fa-2x text-white"></i>
                    </div>
                    <span>Facebook</span>
                </div>
                <div class="option text-center">
                    <div class="icon-circle" style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);">
                        <i class="fab fa-instagram fa-2x text-white"></i>
                    </div>
                    <span>Instagram</span>
                </div>
                <div class="option text-center">
                    <div class="icon-circle bg-dark">
                        <i class="fas fa-link fa-2x text-white"></i>
                    </div>
                    <span>Copiar<br>enlace</span>
                </div>
                <div class="option text-center">
                    <div class="icon-circle bg-info">
                        <i class="fab fa-telegram-plane fa-2x text-white"></i>
                    </div>
                    <span>Telegram</span>
                </div>
                <div class="option text-center">
                    <div class="icon-circle bg-secondary">
                        <i class="fas fa-ellipsis-h fa-2x text-white"></i>
                    </div>
                    <span>Más apps</span>
                </div>
            </div>
            <div class="search-contacts d-flex align-items-center mb-4">
                <div class="search-icon-circle bg-dark d-flex align-items-center justify-content-center mr-2">
                    <i class="fas fa-search fa-sm"></i>
                </div>
                <span>Buscar contactos</span>
            </div>
            <div class="contacts">
                <div class="contact d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <div class="avatar bg-secondary text-white d-flex justify-content-center align-items-center mr-3">J</div>
                        <div class="info">
                            <span class="name d-block">Julypadilla</span>
                            <span class="username text-muted">@julissamapb</span>
                        </div>
                    </div>
                    <button class="btn btn-light-grey rounded-pill">Enviar</button>
                </div>
                <div class="contact d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="avatar bg-info text-white d-flex justify-content-center align-items-center mr-3">A</div>
                        <div class="info">
                            <span class="name d-block">Ale Solano</span>
                            <span class="username text-muted">@absv15</span>
                        </div>
                    </div>
                    <button class="btn btn-light-grey rounded-pill">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
