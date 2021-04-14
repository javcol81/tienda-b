


@extends('layouts.app4')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
			<div class="card-header">EL ESTADO DE SU PEDIDO SE IRÁ ACTUALIZANDO, ESPERE...</div>

			<div class="card-header">POR RECLAMOS O DEMORAS, COMUNICATE CON ROTISERÍA MODELO 4235689 - O ENVIÁ UN WHATSAPP 3435567788</div>

			<div class="card-body">
				@if(session('message'))
				<div class="alert alert-success">
					{{session('message')}}
				</div>
				@endif
                <div id="app">

					<Order-Alert user_id="{{ auth()->user()->id }}"></Order-Alert> 
                    <Order-Progress status="{{ $order->status->name }}" initial="{{ $order->status->percent }}" order_id="{{ $order->id }}"></Order-Progress>
			  
				
                </div>
               
			

			<br>

			<div class="order-details">
				<strong>Orden ID: </strong> {{$order->id}} <br>
				
			
				@if($order->instructions != '')
				<strong>Instrucciones: </strong>{{$order->instructions}}
				@endif
			</div>

			<br>
			<a class="btn btn-primary" href="{{route('user.order')}}">Volver a ordenes</a>
            
		</div>
		</div>
		</div>
	</div>
</div>

<script src="{!! asset('estilo/js/bootstrap.min.js') !!}"></script>

@endsection


