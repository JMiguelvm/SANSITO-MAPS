  var pedidos = document.getElementsByClassName('pedido');
  for (let i = 0; i < pedidos.length; i++) {
    const pedido = pedidos[i];
    pedido.addEventListener('click', function() {
      const pedidoTitulo = this.querySelector('h3').textContent;
      const pedidoDetalle = this.querySelector('p').textContent;
      
      document.getElementById('pedidoTitulo').textContent = pedidoTitulo;
      document.getElementById('pedidoDetalle').textContent = pedidoDetalle;
      
      document.getElementById('pedidoDescripcion').style.display = 'block';
    });
  }