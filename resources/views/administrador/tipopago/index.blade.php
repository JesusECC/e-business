@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>
				Listado de Tipo de Pago
				<a href="tipopago/create">
					<button class="btn btn-primary">Nuevo</button>
				</a>
			</h3>
			@include('administrador.tipopago.search')
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>TIpo de Pago</th>
					</thead>
					@foreach ($tipopago as $td)
					<tr>
						<td>{{$td->id}}</td>
						<td>{{$td->nombre}}</td> 
						<td>
							<a href="{{route('tipopago.edit', $td->id)}}">
								<button class="btn btn-info">Editar</button></a>

							<a href="" data-target="#modal-delete-{{$td->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include('administrador.tipopago.modal')
					@endforeach
				</table>
			</div>
			<!--para la paginacion-->
			{{$tipopago->render()}}
		</div>
	</div>
@endsection