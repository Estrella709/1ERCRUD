<style>
  .border-pink {
    border: 2px solid pink; /* Borde rosa alrededor de la barra de navegación */
    border-radius: 5px; /* Bordes redondeados (opcional) */
  }

  .nav-link {
    border: 2px solid pink; /* Borde rosa en los botones */
    border-radius: 5px; /* Bordes redondeados */
    padding: 5px 10px; /* Relleno interno para un tamaño de botón más grande */
    margin: 5px; /* Espaciado entre botones */
    transition: background-color 0.3s, border-color 0.3s, color 0.3s; /* Suaviza la transición de estilos */
  }

  .nav-link:hover {
    background-color: pink; /* Fondo negro al pasar el ratón */
    border-color: pink; /* Borde negro al pasar el ratón */
    color: white; /* Texto blanco cuando el fondo es negro */
  }

  .navbar-nav {
    width: 100%;
    justify-content: center; /* Centra los botones */
    align-items: center; /* Alinea verticalmente los botones */
  }
</style>

<nav class="navbar navbar-expand-lg bg-light border-pink">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('products.index')}}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('clients.index')}}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('sales.index')}}">Ventas</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
