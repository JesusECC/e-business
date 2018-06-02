@extends ('layouts.pagina')
@section ('contenido')
     <div class="content-box">
     	<div class="wrap">
     		<ul class="events">
				<li class="active"><a href="main.index">Paquetes</a></li> 
			</ul>
     	   <div class="clear"></div>
     	</div>
     </div>

<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1><i class="fa fa-shopping-cart"></i>Carrito de compras</h1>
			@if(isset($cart))
			<div class="table-responsive-center">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Imagen</th>
						<th>Paquete</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
						<th>Quitar</th>

					</thead>
					<tbody>
					
					
					@foreach ($cart as $c)
					<tr>
						<td><img src="{{asset('images/paquete/'.$c->imagen)}}" alt="{{$c->nombres}}" class="img-responsive" height="50px" width="50px"></td>
						<td>{{ $c->nombre }}</td>
						<td>{{ number_format($c->precio,2) }}</td>
						<td>
							<input type="number" min="1" max="{{$c->cantidad}}" value="{{$c->cant}}" id="paquete_{{ $c->id }}">
							<a href="#" class="btn btn-warning btn-update-item" data-href="{{ route('cart-update',$c->id) }}" data-id="{{ $c->id }}"> <i class="fa fa-refres">)</i> </a>
						
						</td>
						<td>{{ number_format($c->precio*$c->cant,2) }}</td>
						<td>
							<a href="{{route('cart-delete',$c->id)}}" class="btn btn-default">
								<i class="fas fa-trash">eliminar</i>
							</a>
						</td>

					</tr>
					@endforeach
					</tbody>
				</table>
				<h3> <span class="label label-success">
						Total: ${{number_format($total,2)}}
					</span></h3>
			</div>
			<a href="{{ route('cart-trash') }}"><button class="btn btn-primary">Vaciar carrito</button></a>
				<a href=""><button class="btn btn-primary">Seguir Comprando</button></a>
				<a href="{{ route('payment') }}"><button class="btn btn-primary">Pagar</button></a>
			@else
				<h3><span class="label label-warning">No hay productos en el carrito :( </span> </h3>
			@endif
			
		</div>
	</div>
@endsection