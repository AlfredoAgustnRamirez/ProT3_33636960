<body>
  <section>
    <div class="container-fluid mt-3">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="public/assets/img/celulares.jpg" class="d-block w-100 img-fluid" alt="imagen 1" style="height: 350px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Servicio técnico especializado</h5>
              <p>Nos enfocamos en brindar el mejor servicio técnico en la región.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="public/assets/img/celulares2.jpg" class="d-block w-100 img-fluid" alt="imagen 2" style="height: 350px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Venta de accesorios premium</h5>
              <p>Ofrecemos una amplia gama de accesorios premium para celulares y computadoras.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="public/assets/img/celulares3.jpg" class="d-block w-100 img-fluid" alt="imagen 3" style="height: 350px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Reparación rápida y eficiente</h5>
              <p>Garantizamos reparaciones rápidas y eficientes para todos los tipos de dispositivos.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </div>
  </section>

  <section class="py-3">
    <div class="contenedor px-4 px-lg-5 mt-1">
      <div class="jumbo">
        <div class="container">
          <h1 class="jumbo-title text-center">Productos Destacados</h1>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-1">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="public/assets/uploads/cargador.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cargadores Aitech</h5>
              <button class="btn btn-primary ver-mas-btn" data-toggle="modal" data-target="#detalleProductoModal" data-nombre="Cargadores Aitech" data-descripcion="Mantén tus dispositivos cargados y listos en todo momento con nuestros cargadores Aitech. Diseñados para ofrecer velocidad y eficiencia, garantizando una carga rápida y segura para smartphones, tablets y otros dispositivos electrónicos. Perfectos para el hogar, la oficina o mientras viajas." data-imagen="public/assets/uploads/cargador.jpg">Ver más</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="public/assets/uploads/fundas.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fundas de celulares</h5>
              <button class="btn btn-primary ver-mas-btn" data-toggle="modal" data-target="#detalleProductoModal" data-nombre="Fundas de celulares" data-descripcion="Protege tu smartphone con estilo con nuestras fundas de celulares. Disponibles en una amplia variedad de diseños y materiales, asegurando protección contra golpes, arañazos y caídas. Ideal para mantener tu dispositivo seguro y elegante." data-imagen="public/assets/uploads/fundas.jpg">Ver más</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="public/assets/uploads/memorias.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Memorias Gammers</h5>
              <button class="btn btn-primary ver-mas-btn" data-toggle="modal" data-target="#detalleProductoModal" data-nombre="Memorias Gammers" data-descripcion="Aumenta el rendimiento de tu PC con nuestras memorias gamer, optimizadas para brindar velocidad y capacidad excepcionales. Diseñadas para juegos de alto rendimiento y multitarea sin interrupciones, ofreciendo una experiencia fluida y rápida." data-imagen="public/assets/uploads/memorias.jpg">Ver más</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="public/assets/uploads/teclado.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Teclados Gammers</h5>
              <button class="btn btn-primary ver-mas-btn" data-toggle="modal" data-target="#detalleProductoModal" data-nombre="Teclados Gammers" data-descripcion="Experimenta un control absoluto con nuestros teclados gamers, diseñados para ofrecer precisión y respuesta rápida en cada pulsación. Con retroiluminación personalizable y teclas ergonómicas para horas de juego cómodo y sin interrupciones." data-imagen="public/assets/uploads/teclado.jpg">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="detalleProductoModal" tabindex="-1" role="dialog" aria-labelledby="detalleProductoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detalleProductoModalLabel">Detalles del Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <img id="detalleProductoImagen" src="" class="img-fluid" alt="Imagen del producto">
          </div>
          <h5 id="detalleProductoNombre" class="mt-2"></h5>
          <p id="detalleProductoDescripcion"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  </body>

  <script>
    document.querySelectorAll('.ver-mas-btn').forEach(button => {
      button.addEventListener('click', function() {
        const nombre = this.getAttribute('data-nombre');
        const descripcion = this.getAttribute('data-descripcion');
        const imagen = this.getAttribute('data-imagen');

        document.getElementById('detalleProductoNombre').textContent = nombre;
        document.getElementById('detalleProductoDescripcion').textContent = descripcion;
        document.getElementById('detalleProductoImagen').setAttribute('src', imagen);
      });
    });
  </script>


