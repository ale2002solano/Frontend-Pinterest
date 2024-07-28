<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone XR Format</title>
    <link rel="stylesheet" href="css/creartablero.css">
</head>
<body>
    <div class="content">
        <div class="menu">
            <header>
                <button class="close">&times;</button>
                <h1>Crear tablero</h1>
                <button class="next">Siguiente</button>
            </header>
            <div class="input-group">
                <label for="board-title">Nombre del tablero</label>
                <input type="text" id="board-title" placeholder='Agrega un título, como "Bricolaje" o "Recetas"'>
            </div>
            <div class="collaborators">
                <h2>Colaboradores</h2>
                <div class="collaborator">
                    <div class="avatar" style="background-color: #777;">U1</div>
                    <div class="info">
                        <span class="name">Usuario1</span>
                        <span class="username">@usuario1</span>
                    </div>
                    <button class="add">Agregar</button>
                </div>
                <div class="collaborator">
                    <div class="avatar" style="background-color: #5a2;">U2</div>
                    <div class="info">
                        <span class="name">Usuario2</span>
                        <span class="username">@usuario2</span>
                    </div>
                    <button class="add">Agregar</button>
                </div>
                <div class="collaborator">
                    <div class="avatar" style="background-color: #2196F3;">U3</div>
                    <div class="info">
                        <span class="name">Usuario3</span>
                        <span class="username">@usuario3</span>
                    </div>
                    <button class="add">Agregar</button>
                </div>
                <div class="invite">
                    <div class="avatar" style="background-color: #aaa; width: 30px; height: 30px;">+</div>
                    <button class="invite-friends">Invita amigos</button>
                </div>
            </div>
            <div class="visibility">
                <h2>Visibilidad</h2>
                <p class="toggle-row">Mantener este tablero secreto
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </p>
                <p class="description">Mantén este tablero secreto si no quieres que otras personas lo vean</p>
            </div>
        </div>
    </div>
</body>
</html>
