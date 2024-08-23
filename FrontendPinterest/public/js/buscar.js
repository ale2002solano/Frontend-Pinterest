function activar(button) {
    // Desactivar todos los botones
    const botones = document.querySelectorAll('button');
    botones.forEach(btn => {
      btn.classList.remove('activo');
    });
  
    // Activar el botón seleccionado
    boton.classList.add('activo');
  
    // Realizar otras acciones según sea necesario
    console.log('Se ha hecho clic en el botón:', boton.id);
  }
  
  // ventana modal del signo +
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
 // termina ventana modal del signo +

  