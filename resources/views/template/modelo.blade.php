<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Modelo1</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 
  <link href="../favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate-css/animate.min.css" rel="stylesheet">
   <link rel="s../tylesheet" href="fontello.css">
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
   <link rel="stylesheet" href="../fontello.css">
  
 
  
   
     <link rel="stylesheet" href="../Carro%20Compras%20JavaScript/css/bootstrap.min.css">
   <script src="../Carro%20Compras%20JavaScript/js/popper.min.js"></script>
    <link rel="stylesheet" href="../Carro%20Compras%20JavaScript/css/bootstrap.min.css">
    <script src="../Carro%20Compras%20JavaScript/js/popper.min.js"></script>
    <link rel="stylesheet" href="../Carro%20Compras%20JavaScript/css/sweetalert2.min.css">
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Sección
  ============================-->
 

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
      
        <!-- Descomentar abajo para usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="menu-active"><a href="#hero">Bienvenido</a></li>
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li class="menu-active"><a href="loginU.html">¿Cómo funciona la tarjeta virtual?</a></li>
          <li class="menu-active"><a href="#Comercios">Comercios</a></li>
           <li class="menu-active"><a href="#contact">Contactá Con Nostros</a></li>
           <li class="menu-active"><a href="cerrar_sesion.php">Cerran sesión</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-contenedor -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Bienvenido</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">SECCIÓN DE COMPRAS.</p>
             <h1>1°Elegí los productos</h1>
             <h1>2°tocá el carrito y procesá tu descuento</h1>
            
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
     
    <div class="row">
         
          
          <div class="contenedor-blog">
          
          <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
           <!--==========================
             procesar compras carrito
            ============================-->
                   <div class="collapse navbar-collapse" id="navbarCollapse">
           
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="../img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="modelo/compra.html" id="procesar-pedido" class="btn btn-primary btn-block">Procesar descuento</a>
                                    <a href="#" id="vaciar-carrito" class="btn btn-danger btn-block">vaciar carrito
                                        </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--==========================
                     fin procesar compras
                   ============================-->
                   <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Pizza especial</h4>
                    </div>
                    <div class="card-body">
                        <img src="../img/pizza.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">300</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR PLATEADO</li>
                            <li>256 GB DISCO SSD</li>
                        </ul>
                           
                           <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>
              
              
               <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ADVANCE</h4>
                    </div>
                    <div class="card-body">
                        <img src="../img/patio%20cervecero.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">250</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>3 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>64 GB DD</li>
                        
                        </ul>
                          
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>
                
               <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ADVANCE</h4>
                    </div>
                    <div class="card-body">
                        <img src="../img/los%20quinchos.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">195</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>3 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>64 GB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>
            <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ADVANCE</h4>
                    </div>
                    <div class="card-body">
                        <img src="../img/ego-comelli.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>3 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>64 GB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>
             <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ADVANCE</h4>
                    </div>
                    <div class="card-body">
                        <img src="../img/ceferino.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">40</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>3 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>64 GB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>
          
           </div>
      </div>
    </div>
    </div>
    </div>
  </section>

  <!--==========================
  seccción servicios
  ============================-->
 
  <!--==========================
  Subscrbe seccion
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
        
          <p class="subscribe-text">Empezá a disfrutar de todos los comercios adheridos a nuestra red, empezá a disfrutar de grandes descuentos!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Comcercios Section
  ============================-->
    
            
  <!--==========================
  Contacto Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contacto</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Envianos un mensaje para conocer más sobre los servicios que ofrecemos o comunicate con los teléfonos indicados.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Oficina Virtual<br>Paraná, Entre Ríos</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>blinkparana@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>(0343)15405-0549</p>
              <p>(0343)154480-3448</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Tu mensaje ha sido enviado. ¡Gracias!</div>
            <div id="errormessage"></div>
            <form action="contactform.php" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Titulo" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
          <div class="copyright">
            &copy; 2020 <strong>Blink Desarrollos</strong> Paraná Entre Ríos, Argentina.
             </div>
        
          <div class="credits">
        
            
              </div>
        
         
        </div>
      </div>
      
    </div>
             
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/morphext/morphext.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/stickyjs/sticky.js"></script>
  <script src="../lib/easing/easing.js"></script>
  <script src="../js/custom.js"></script>
  <script src="../contactform/contactform.js"></script>
 
   
   
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sweetalert2.min.js"></script>
    <script src="../js/carrito.js"></script>
    <script src="../js/pedido.js"></script>

</body>

</html>
