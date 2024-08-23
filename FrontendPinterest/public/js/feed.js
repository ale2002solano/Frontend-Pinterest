let page = 1;

async function loadPins() {
    const response = await fetch(`/pins?page=${page}`);
    const data = await response.json();

    const container = document.getElementById('pin-container');
    data.pins.forEach(pin => {
        const pinElement = document.createElement('div');
        pinElement.classList.add('pin');
        pinElement.innerHTML = `
            <img src="${pin.image}" alt="Pin Image">
            <p>${pin.description}</p>
            <div class="actions">
                <button><i class="fas fa-heart"></i></button>
                <button><i class="fas fa-ellipsis-h"></i></button>
            </div>
        `;
        container.appendChild(pinElement);
    });

    page++;
}

window.addEventListener('scroll', () => {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        loadPins();
    }
});

document.addEventListener('DOMContentLoaded', () => {
    loadPins();
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