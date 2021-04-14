





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        
        
    <link rel="stylesheet" href="{!! asset('estilo/Carro%20Compras%20JavaScript/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('estilo/Carro%20Compras%20JavaScript/css/estilo.css') !!}">
   
    

   
   
   
    <link rel="stylesheet" href="{!! asset('estilo/Carro%20Compras%20JavaScript/css/sweetalert2.min.css') !!}">
    
    
    
    
      <!-- css de index.html -->
      
  
 <link href="{!! asset('estilo/css/style.css') !!}" rel="stylesheet">
  
  
  
   
    <title>Carrito Compras</title>

</head>

<body>

    <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        
        <!-- Descomentar abajo para usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="home">Inicio</a></li>
          
        
        
          
        </ul>
      </nav>
      <h2 class="d-flex justify-content-center mb-3">Elegí las cantidades</h2>
      <!-- #nav-menu-contenedor -->
    </div>
  </header>
 
    <br>

   
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="row justify-content-center">
                    
                    
                    
                    <form id="procesar-pago" action=" {{route('tarjeta')}} " method="POST">
                    @csrf
                          
                    
                    <div class="form-group row">
                        <label for="email" class="col-12 col-md-2 col-form-label h2">Email:</label>
                        <div class="col-12 col-md-10">
                            <input type="email" class="form-control" id="email"
                                placeholder="Ingresá tu Email" name="email" required>
                        </div>
                    </div>
                      
                      
                        
                        <div id="carrito" class="form-group table-responsive" >
                            <table class="table" id="lista-compra">
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">SubTotal</th>
                                        
                                    </tr>
          
                                </thead>
                                <tbody>
                                 
                                    
                                   
                                </tbody>
                               
                                
                                    
                                  <tr>
                                    <th colspan="4" scope="col" class="text-right"></th>
                                    <th scope="col">
                                        <p id="subtotal"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right"></th>
                                    <th scope="col">
                                        <p id="igv"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                                    <th scope="col">
                                        <input id="total" name="total" class="font-weight-bold border-0" readonly style="background-color: white;"></input>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>

                            </table>
                        </div>
                      
                      
                      
                        <div class="row justify-content-between">
                            <div class="col-xs-12 col-md-4">
                                <button href="#" class="btn btn-success btn-block" id="procesar-compra">Siguiente</button>
                            </div>

                            
                           
                           <div  class="col-xs-12 col-md-4">
                                <a href="Modelo" class="btn btn-info btn-block">Volver a galería de compras</a>
                            </div>
                        </div>
                    </form>

   




                </div>


            </div>

        </div>
    </main>


    <script src="{!! asset('estilo/js/jquery-3.4.1.min.js') !!}"></script>
    <script src="{!! asset('estilo/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('estilo/js/sweetalert2.min.js') !!}"></script>
    
    <script type="{!! asset('estilo/text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') !!}"></script>
    <script type="{!! asset('estilo/text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js') !!}"></script>
    
    <script src="{!! asset('estilo/js/carrito.js') !!}"></script>
    
    <script src="{!! asset('estilo/js/compra.js') !!}"></script>

</body>




</html>


