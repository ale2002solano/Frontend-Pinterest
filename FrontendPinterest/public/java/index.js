const renderizarfotos = () => {
    document.getElementById('not').innerHTML = '';
    for(let i=0;i<2;i++) {
        document.getElementById('not').innerHTML += `
         <div class="dividir" > 
           
            <div id="album-fotos"> 

                <div class="main-photo">
                    <img src="img/img1.jpeg" alt="Foto 1">
                </div>
                <div class="side-photos">
                    <div class="side-photo">
                        <img src="img/img2.jpeg" alt="Foto 2">
                    </div>
                    <div class="side-photo">
                        <img src="img/img3.jpeg"  alt="Foto 3">
                    </div>
                </div>
               

            </div>

            <div id="describir">
                 <div>nise que poner</div>
                 <div>tampoc</div>

            </div>



        </div>
      
        ` ;}
  } 
 
renderizarfotos();


/* <div class="post-nav2">
        <div>flechas</div>
        <div> grupo</div>
        <div> secreto</div>


    </div> */
