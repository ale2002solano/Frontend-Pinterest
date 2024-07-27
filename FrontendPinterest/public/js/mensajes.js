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
  