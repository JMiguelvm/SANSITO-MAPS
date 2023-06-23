// Obtener elementos del DOM
const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');
const searchResults = document.getElementById('search-results');
const products = document.querySelectorAll('.product');

// Función para filtrar productos
function filterProducts() {
  const searchTerm = searchInput.value.toLowerCase();

  // Iterar sobre los productos y mostrar u ocultar según el término de búsqueda
  products.forEach((product) => {
    const productName = product.querySelector('.product-name').textContent.toLowerCase();

    if (productName.includes(searchTerm)) {
      product.style.display = 'block';
    } else {
      product.style.display = 'none';
    }
  });
}

// Evento de tecla presionada en el campo de búsqueda
searchInput.addEventListener('keyup', filterProducts);

//Barra de categorias
var menuBtn = document.getElementById('menu-btn');
var menu = document.getElementById('menu');

menuBtn.addEventListener('click', function() {
  if (menu.style.display === 'none') {
    menu.style.display = 'block';
  } else {
    menu.style.display = 'none';
  }
});

