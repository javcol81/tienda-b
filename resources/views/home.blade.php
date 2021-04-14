
@extends('layouts.app')


<!DOCTYPE html>
<html lang="es">

<head>


  <meta charset="utf-8">
  <title>Red Blink</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <script src="{!! asset('estilo/js/hora.js') !!}"></script>
  <link href="{!! asset('estilo/css2/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
  <link href="{!! asset('estilo/favicon.ico') !!}" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{!! asset('estilo/lib/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="{!! asset('estilo/lib/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('estilo/lib/animate-css/animate.min.css') !!}" rel="stylesheet">
   
  <!-- Main Stylesheet File -->
 
  <link href="{!! asset('estilo/css/home.css') !!}" rel="stylesheet">
  <script src="{!! asset('estilo/js/sweetalert2.min.js') !!}"></script>
  
   
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
         
         
          
          <li><a href="/funcionamiento2">¿Cómo funciona?</a></li>
          
        
        
         
        </ul>
      </nav>
      
      <!-- #nav-menu-contenedor -->
    </div>
  </header>
  @section('content')

  <!-- #header -->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Bienvenido</h3>
          <div class="section-title-divider"></div>
                   <h3 class="section-title">Elegí la Categoria</h3>

        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
     
    
         
          
         
          
          
            
            
           <!--==========================
             procesar compras carrito
            ============================-->
                 
                    <!--==========================
                     fin procesar compras
                   ============================-->
                 
      
          
          <div class="contenedor-blog">
              
            <input type="radio" name="filtro" id="todo" checked>
            <label for="todo">Todo</label>             
            <input type="radio" name="filtro" id="roti">
            <label for="roti">Rotiserías</label>
            <input type="radio" name="filtro" id="pelu">
            <label for="pelu">Peluquerías</label>
            <input type="radio" name="filtro" id="pintu">
            <label for="pintu">Pinturerías</label>
            <input type="radio" name="filtro" id="resto">
            <label for="resto">Restaurantes</label>
            <input type="radio" name="filtro" id="bar">
            <label for="bar">Bares</label>
              
          
              
                  <div class="imagenes">
 
               
                <div class="roti">
                  <a onload="setTimeout('abrir()', calcular())" href="Modelo"><img src="{!! asset('estilo/img/pizza.jpg') !!}" alt=""></a>
                  
                  
                </div>
               
             
              
              
              
              
                  <div class="pintu">
                   <a href="Pacifico"><img src="{!! asset('estilo/img/Pintura.jpg') !!}"></a>
                 
                </div>
               
                
              
                  <div class="pelu">
                    <a href="Ego"><img src="{!! asset('estilo/img/corte.jpg') !!}"></a>
                
                  </div>
              
            
                  <div class="resto">
                    <a href="losquinchos"><img src="{!! asset('estilo/img/los%20quinchos.jpg') !!}"></a>
                    
                    </div>
                   
                 
                 
              <div class="resto">
                <a href="Abuela"><img src="{!! asset('estilo/img/patio%20cervecero.jpg') !!}"></a>
                 
                </div>
                    
              <div class="resto">
                <a href="Abuela"><img src="{!! asset('estilo/img/patio%20cervecero.jpg') !!}"></a>
                 
                </div>
                    
              <div class="resto">
                <a href="Abuela"><img src="{!! asset('estilo/img/patio%20cervecero.jpg') !!}"></a>
                 
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

</body>

</html>
@endsection
