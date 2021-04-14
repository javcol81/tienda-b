

  <!DOCTYPE html>
  <html lang="en">
  <head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <title>Detalle cliente</title>

	  <link href="{!! asset('estilo/css/envio.css') !!}" rel="stylesheet">
  </head>
  <body>




@extends('layouts.app5')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Detalles del cliente</div>

				<div class="card-body">
					@if(session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
					@endif

                  <div class="contenedor-form">
					

					<div class="row">
						<div class="col-lg-12">
				
							<form method="POST" action=" {{route('user.order.store')}} " class="form-horizontal">
								{{csrf_field()}}
								  
							
								<input type="radio" name="filtro" value="enviame" id="dire" checked>
								<label for="dire">Enviarme el pedido</label>   
							
							
								<input type="radio" name="filtro" value="retirolocal" id="pedi">
								<label for="pedi">Retiro por local</label>
							
								<div class="direcciones">

									

								<div class="form-group">
									<div class="dire">
									<h5 class="col-sm-8 control-label"><strong>Dirección donde se envía el pedido</strong></h5>
									<div class="col-sm-10">
										<input type="text" name="address" placeholder="Dirección" class="form-control" autofocus>
									</div>
									</div>
							</div>
								

								<div class="hr-line-dashed"></div>

								

								<div class="hr-line-dashed"></div>
								<div class="hr-line-dashed"></div>

								

								<div class="form-group">
									<div class="pedi">
									<h5 class="col-sm-8 control-label"><strong>¿Nota sobre el pedido?</strong></h5>
									<div class="col-sm-10">
										<input type="text" name="instructions" placeholder="Opcional" class="form-control">
									</div>
								</div>
							</div>
							
							

								<div class="form-group">
									<div class="agregar">
									<h5 class="col-sm-8 control-label"><strong>¿Querés agregar algún detelle de la dirección?</strong></h5>
									
									<div class="col-sm-10">
										<input type="text" name="direccion" placeholder="Opcional" class="form-control">
									</div>
								</div>
								</div>
							
								
							
								<div class="form-group">
									
									<h5 class="col-sm-8 control-label"><strong>Número de teléfono, te avisaremos si surge algún contratiempo en el pedido</strong></h5>
									<div class="col-sm-10">
										<input type="number" name="telefono" placeholder="Teléfono de contacto" class="form-control" required>
									</div>
								</div>
							

								<div class="hr-line-dashed"></div>

								<div class="form-group">
									<div class="col-sm-4 col-sm-offset-2">
										<div class="form-actions">
										<button class="btn btn-success" id="procesar-pedido" type="submit">Ordenar Ahora</button>
										</div>
									</div>
								</div>
							
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	  
</body>
</html>
@endsection


<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado

  date_default_timezone_set('America/Argentina/Buenos_Aires');
 


 if($_POST){

 

  $hora =  date ("d/m/Y - H:i:s");
  $producto = $_POST['producto'];
  $cantidad = $_POST['cantidad'];
  $total = $_POST['total'];
  $email = $_POST['email'];
  $pedido = array();
  
  $ruta = "_results.json";
  
  if(file_exists($ruta)){

	$archivo = file_get_contents($ruta);
	$pedido = json_decode($archivo, true, JSON_PRETTY_PRINT);
   
  
 

  $pedido[] = array('hora' => $hora, 'email' => $email, 'producto' => $producto, 'cantidad' => $cantidad, 'total' => $total);
 
 
  $json_string = json_encode($pedido);
  

  $file = $ruta;
  file_put_contents($file, $json_string, FILE_APPEND | LOCK_EX);
}
else{
	$pedido[] = array('producto' => $producto, 'cantidad' => $cantidad, 'total' => $total);
 
	$json_string = json_encode($pedido);
  

  $file = $ruta;
  file_put_contents($file, $json_string, FILE_APPEND | LOCK_EX);

}
  
 }
 
?>

  
