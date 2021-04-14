




<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Modelo1</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 
  <link href="{!! asset('estilo/favicon.ico" rel="shortcut icon') !!}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{!! asset('estilo/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet') !!}">
  
  <!-- Libraries CSS Files -->
  <link href="{!! asset('estilo/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet') !!}">
  <link href="{!! asset('estilo/lib/animate-css/animate.min.css" rel="stylesheet') !!}">
  
  <!-- Main Stylesheet File -->
  <link href="{!! asset('estilo/css/style.css" rel="stylesheet') !!}">
  <link href="{!! asset('estilo/lib/animate-css/animate.min.css" rel="stylesheet') !!}">
   
  
 
  
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="{!! asset('estilo/sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous') !!}">



     <link rel="stylesheet" href="{!! asset('estilo/Carro%20Compras%20JavaScript/css/bootstrap.min.css ') !!}">
     <link rel="stylesheet" href="{!! asset('estilo/Carro%20Compras%20JavaScript/css/bootstrap.min.css ') !!}">
    <script src="{!! asset('estilo/js/popper.min.js ') !!}"></script>
    <link rel="stylesheet" href="{!! asset('estilo/Carro%20Compras%20JavaScript/css/sweetalert2.min.css ') !!}">
</head>

<body>
 

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
           
          <li class="menu-active"><a href="home">Inicio</a></li>
          <li class="menu-active"><a href="funcionamiento2">¿Cómo funciona?</a></li>
          
           
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
          <h3 class="section-title">Bienvenido a Rotisería Modelo</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">SECCIÓN DE COMPRAS.</p>
          <h1>-Añadí productos al carrito</h1>
          
          
        </div>
      </div>
    </div>
    <form method="POST" action=" {{route('user.order.store')}} " class="form-horizontal">
      {{csrf_field()}}
    <div class="container about-container wow fadeInUp">
     
    <div class="row">
    

          
          <div class="contenedor-blog">
          
          <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
           <!--==========================
             procesar compras carrito
            ============================-->
           
                   <div class="navbar-collapse" id="navbarCollapse">
           
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="{!! asset('estilo/img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false') !!}"></img>
                                <div id="carrito" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>

                                    <a href="compra" id="procesar-pedido" class="btn btn-primary btn-block">SIGUIENTE</a>
                                    <a href="#" id="vaciar-carrito" class="btn btn-danger btn-block">VACIAR CARRITO
                                        </a>
                                </div>
                              </form>
                            </li>
                        </ul>
                    </div>
                    

                    
                    <!--==========================
                     fin procesar compras
                   ============================-->
                   <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">(R.M)Pizza-especial</h4>
                    </div>
                    <div class="card-body">
                        <img src="{!! asset('estilo/img/pizza.jpg') !!}" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">350</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Mozzarella</li>
                            <li>jamón, Tomate</li>
                            <li>huevo aceitunas</li>
                        </ul>
                           
                           <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Añadir producto</a>
                    </div>
                </div>
              
              
               <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">(R.M)Empanadas-C/U</h4>
                    </div>
                    <div class="card-body">
                        <img src="{!! asset('estilo/img/empanadas.jpg') !!}" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">45</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Carne (dulce-saladas)</li>
                            <li>Jamón y queso </li>
                            <li>Cebolla</li>
                        
                        </ul>
                          
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Añadir producto</a>
                    </div>
                </div>
                
               <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        
                        <h4 class="my-0 font-weight-bold">(R.M)Ravioles</h4>
                    </div>
                    <div class="card-body">
                        <img src="{!! asset('estilo/img/ravioles.jpg') !!}" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">150</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Verdura</li>
                            <li>Pollo</li>
                            <li>Ricota</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Añadir producto</a>
                    </div>
                </div>
            <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">(R.M)Pollo a la parrilla</h4>
                    </div>
                    <div class="card-body">
                        <img src="{!! asset('estilo/img/pollo-a-la-parrilla.jpg') !!}" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">300</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Porción + guarnición</li>
                            <li>Pata Muslo</li>
                            <li>Pechuga</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Añadir producto</a>
                    </div>
                </div>
             <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">(R.M)Hamburguesas</h4>
                    </div>
                    <div class="card-body">
                        <img src="{!! asset('estilo/img/hamburguesas.jpg') !!}" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">180</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Carne</li>
                            <li>Pollo</li>
                            <li>Vegetarianas</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Añadir producto</a>
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


  
 
   
  
    
    
    <script src="{!! asset('estilo/js/jquery-3.4.1.min.js') !!}"></script>
    <script src="{!! asset('estilo/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('estilo/js/sweetalert2.min.js') !!}"></script>
    <script src="{!! asset('estilo/js/carrito.js') !!}"></script>
    <script src="{!! asset('estilo/js/pedido.js') !!}"></script>


    

</body>

</html>
