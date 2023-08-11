
document.addEventListener("DOMContentLoaded", function() {
    // Obtener elementos del DOM
    const searchInput = document.getElementById('searchText');
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

    searchInput.addEventListener('keyup', filterProducts);
});
