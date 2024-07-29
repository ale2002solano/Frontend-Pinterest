<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/pines.css">
    <link rel="stylesheet" href="{{ asset('css/invitar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pines.css') }}">
</head>
<body>
    <header>
        <nav>

            <div class="ll" id="perfil-narvar" href="#Profile"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="ll" href="#Pines">Invitar a los colaboradores</div>
           
            
         

        </nav>
    </header>

    <div id="colab">

        Los colaboradores puede... <br>
        <div class="de">
             <div style="font-size: 20px; font-weight: bold; ">Hacer (casi) de todo</div> 
             <div><i class="fa-solid fa-chevron-right fa-2xl"></i></div>
        </div>
 
        Añade, mueve o elimina Pines y <br>sutableros, comenta y reacciona
    </div>
  
    
    <div class="icons-container">
        <div class="icon">
            <img src="img/img2.jpeg" alt="WhatsApp">
            <div class="icon-label">WhatsApp</div>
        </div>
        <div class="icon">
            <img src="img/img2.jpeg" alt="Message">
            <div class="icon-label">Message</div>
        </div>
        <div class="icon">
            <img src="img/img2.jpeg" alt="Facebook">
            <div class="icon-label">Facebook</div>
        </div>
        <div class="icon">
            <img src="img/img2.jpeg" alt="Instagram">
            <div class="icon-label">Instagram</div>
        </div>
        <div class="icon">
            <img src="img/img2.jpeg" alt="Copy Link">
            <div class="icon-label">Copy Link</div>
        </div>
    </div>
    <hr  />

    <div class="post-nav">

        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass fa-lg"> </i> &nbsp;&nbsp;&nbsp;Buscar contactos
        </div>
       

    </div>

    <div class="message">
        <img src="img/img1.jpeg" alt="Profile Picture">
        <div class="message-content">
            <div class="name">Samuel Espinal</div>
            <div class="text">@samuel90</div>
        </div>
        <button class="invite-button">Invitar</button>
    </div>

    <div class="message">
        <img src="path/to/profile2.jpg" alt="Profile Picture">
        <div class="message-content">
            <div class="name">Jane Ortiz</div>
            <div class="text">@jan33</div>
        </div>
        <button class="invite-button">Invitar</button>
    </div>

    <div id="modalOverlay" class="modal-overlay">
        <div id="modal" class="modal">
            <div class="modal-header">
                <button id="closeModalBtn" class="close-btn">X</button>
                <h2>Comienza a crear ahora</h2>
            </div>
            <div class="casillas">
                <div class="casilla2">
                    <div class="contenido3"></div>
                    <p>Nombre 1</p>
                </div>
                <div class="casilla2">
                    <div class="contenido3"></div>
                    <p>Nombre 2</p>
                </div>
                <div class="casilla2">
                    <div class="contenido3"></div>
                    <p>Nombre 3</p>
                </div>
            </div>
        </div>
    </div>



    <footer id="footer">

        <div class="footer2">

            <div class="item2"> </div>
            <div class="item2"><i class="fa-solid fa-house"></i></div>
            <div class="item2"><i class="fa-solid fa-magnifying-glass"></i></div>
            <div class="item2"><i   id="openModalBtn" class="fa-duotone fa-solid fa-plus"></i></div>
            <div class="item2"><i class="fa-solid fa-comment-dots"></i></div>
            <div class="item2">O</div>
            <div class="item2"> </div>


        </div>
      
    </footer>
</body>
<script src="./java/pines.js" ></script>
</html>