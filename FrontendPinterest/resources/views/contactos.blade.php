<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/3cf485552f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/contactos.css">
</head>
<body>
    <div class="container-fluid h-100 d-flex flex-column justify-content-between">
       
        <div class="row align-items-center p-2" style="background-color: #1c1c1e;">
            <div class="col-auto">
                <a href="#"><i class="fas fa-chevron-left text-white"></i></a>
            </div>
            <div class="col text-center">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="d-inline-block rounded-circle bg-danger text-white text-center mr-3" style="width: 30px; height: 30px;">
                        <span class="align-middle" style="line-height: 30px; font-size: 16px;">A</span>
                    </div>
                    <span class="text-white">Valeria Padilla</span>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-ellipsis-h text-white"></i>
            </div>
        </div>

        <div class="row justify-content-center align-items-center flex-grow-1" style="background-color: #000;">
            <div class="text-center">
                <div class="d-flex align-items-center justify-content-center">
                    
                    <i class="fas fa-comment-dots text-white bg-dark rounded-circle p-2 mr-2"></i>

                   
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <div class="d-inline-block rounded-circle bg-danger text-white text-center" style="width: 70px; height: 70px;">
                            <span class="align-middle" style="line-height: 70px; font-size: 24px;">A</span>
                        </div>
                        
                        <div class="d-inline-block rounded-circle bg-secondary text-white text-center ml-n4" style="width: 70px; height: 70px;">
                            <span class="align-middle" style="line-height: 70px; font-size: 24px;">V</span>
                        </div>
                    </div>

                   
                    <i class="fas fa-hand-paper text-warning bg-dark rounded-circle p-2 ml-2"></i>
                </div>
                <p class="mt-3" style="color: white;">Ale</p>
                <p style="color: gray;">Esto podría ser el principio de algo bueno</p>
            </div>
        </div>

       
        <div class="row align-items-center p-3" style="background-color: #1c1c1e;">
            <div class="col-auto">
                <button class="btn btn-outline-light rounded-circle" style="font-size: 20px;">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <div class="col">
                <input type="text" class="form-control bg-dark text-white" placeholder="Escribe un mensaje...">
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-light rounded-circle" style="font-size: 20px;">
                    <i class="fas fa-heart"></i>
                </button>
            </div>
        </div>
    </div>
</body>
</html>
