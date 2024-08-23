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
  

  document.addEventListener('DOMContentLoaded', () => {
    const pins = [
       
        {
            image: '../img/d2.jpg',
            description: 'Más inspiración basada en tu interés por papel de pared de Disney',
            user: '',
            recommended: '',
            days: '2 días',
        },
        {
            image: '../img/d1.jpg',
            description: 'Creemos que te podrian gustar estas ideas',
            user: 'Magico388',
            recommended: '',
            days: '3 días',
        },


        {
            image: '../img/d3.jpg',
            description: 'Diseños de uñas que te podrian gustar',
            user: 'MagicoGen',
            recommended: '',
            days: '3 días',
        },

        
        {
            image: '../img/ini2.jpg',
            description: 'Pines inspirados en ti',
            user: 'Magico388',
            recommended: '',
            days: '3 días',
        },
    ];

    const pinContainer = document.getElementById('pin-container');

    pins.forEach(pin => {
        const pinElement = document.createElement('div');
        pinElement.classList.add('recommendation');

        const pinHTML = `
            <img src="${pin.image}" alt="Pin Image">
            <div class="description">
                <p>${pin.description}</p>
                <div class="details">
                    ${pin.user ? `<span>${pin.user}</span>` : ''}
                    ${pin.recommended ? `<span>creó un Pin. Recomendado: ${pin.recommended}</span>` : ''}
                    <span class="days">${pin.days}</span>
                </div>
            </div>
        `;

        pinElement.innerHTML = pinHTML;
        pinContainer.appendChild(pinElement);
    });
});

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