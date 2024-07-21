const renderizarfotos = () => {
    document.getElementById('west').innerHTML = '';
    for(let i=0;i<3;i++) {
        document.getElementById('west').innerHTML += `
      <div class="casilla pequena"><img src="img/img1.jpeg" alt="Foto 1"></div>
                <div class="casilla mediana"><img src="img/img1.jpeg" alt="Foto 1">/div>
                <div class="casilla grande"><img src="img/img1.jpeg" alt="Foto 1"></div>
               `
         
        ;}
  } 

renderizarfotos();

const renderizarfotos2 = () => {
    document.getElementById('west2').innerHTML = '';
    for(let i=0;i<3;i++) {
        document.getElementById('west2').innerHTML += `
               <div class="casilla grande"><img src="img/img1.jpeg" alt="Foto 1"></div>
                <div class="casilla mediana"><img src="img/img1.jpeg" alt="Foto 1">/div>
                <div class="casilla grande"><img src="img/img1.jpeg" alt="Foto 1"></div>
               `
         
        ;}
  } 

renderizarfotos2();

const renderizarfotos3 = () => {
    document.getElementById('west3').innerHTML = '';
    for(let i=0;i<3;i++) {
        document.getElementById('west3').innerHTML += `
                <div class="casilla pequena"><img src="img/img1.jpeg" alt="Foto 1"></div>
                <div class="casilla mediana"><img src="img/img1.jpeg" alt="Foto 1">/div>
                <div class="casilla grande"><img src="img/img1.jpeg" alt="Foto 1"></div>
               `
         
        ;}
  } 

renderizarfotos3();

document.getElementById('openModalBtn').addEventListener('click', function() {
  document.getElementById('modalOverlay').style.display = 'flex';
  document.getElementById('footer').style.display = 'none';
});

document.getElementById('closeModalBtn').addEventListener('click', function() {
  document.getElementById('modalOverlay').style.display = 'none';
  document.getElementById('footer').style.display = 'block';
});

document.getElementById('modalOverlay').addEventListener('click', function(event) {
  if (event.target === this) {
      this.style.display = 'none';
      document.getElementById('footer').style.display = 'block';
  }
});
