@extends('layouts.app2')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Tablero Administrador</div>
            <div id="app">


              <Order-Alert user_id="{{ auth()->user()->id }}"></Order-Alert>
            </div>
           
           
            <div class="card-body">
              @if (session('message'))
                  <div class="alert alert-success">
                    {{ session('message') }}
                  </div>
              @endif

              @if ($orders->count() == 0)
                  <p>sin orden todavía.</p>
                  <a href="{{ route('admin.order') }}" class="btn btn-success">Tablero administrador</a>

               
                 

              

                  @else

                  
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre Cliente</th>
                          <th>Email</th>
                          <th>Dirección</th>
                          <th>Enviame o rerito por local</th>
                          <th>Instruccines pedido</th>
                          <th>Instruccines dirección</th>
                          <th>Teléfono</th>
                          <th>Estado</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order)
                            <tr>
                              <td>{{ $order->id }}</td>
                              <td>{{ $order->customer->name }}</td>
                              <td>{{ $order->customer->email }}</td>
                              <td>{{ $order->address }}</td>
                              <td>{{ $order->filtro }}</td>
                              <td>{{ $order->instructions }}</td>
                              <td>{{ $order->direccion }}</td>
                              <td>{{ $order->telefono }}</td>
                              <td>{{ $order->email }}</td>
                              <td><a href="{{ route('admin.order.edit', $order) }}">{{ $order->status->name }}</a></td>
                            </tr>
                           
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection






