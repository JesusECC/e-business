@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>
				Listado de Eventos Creados 
				<a href="clientes/create">
					<button class="btn btn-primary">Nuevo</button>
				</a>
			</h3>
			@include('partner.evento.search')
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						
						<th>Nombre de Evento</th>
						<th>Fecha de Creación</th>
						<th>Fecha de Evento</th>
						<th>Hora de Evento</th>
						<th>Aforo de Evento</th>
						<th>Decsripción</th>
						<th>Imagen</th>
						<th>Estado</th>
						<th>Empresa</th>
						<th>Opciones</th>

					</thead>
					@foreach ($persona as $per)
					<tr>
						<td class="hidden-lg">{{$per->id}}</td>
						<td>{{$per->num_docum}}</td> 
						<td>{{$per->nombres}}</td> 
						<td>{{$per->ap_paterno}}</td> 
						<td>{{$per->ap_materno}}</td> 
						<td>
							<a href="{{route('clientes.edit', $per->id)}}"> 
								<button class="btn btn-info">Editar</button></a>

							<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal">
								<button class="btn btn-danger">Eliminar</button>
							</a>
							<a href="" data-target="#modal-vista-{{$per->id}}" data-toggle="modal">
								<button class="btn btn-primary">Ver Evento</button>
							</a>
						</td>
					</tr>
					@include('partner.usuario.modal')
					@include('partner.usuario.modal-imagen')
					@endforeach
				</table>
			</div>
			<!--para la paginacion-->
			{{$persona->render()}}
		</div>
	</div>
@endsection