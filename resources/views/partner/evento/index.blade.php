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
						<th class="hidden-lg">Id</th>
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
					@foreach ($evento as $eve)
					<tr>
						<td class="hidden-lg">{{$eve->id}}</td>
						<td>{{$eve->nombre}}</td> 
						<td>{{$eve->fecha-creación}}</td> 
						<td>{{$eve->fecha}}</td> 
						<td>{{$eve->hora}}</td> 
						<td>{{$eve->aforo}}</td> 
						<td>{{$eve->descripción}}</td>
						<td>
							<img src="{{asset('imagenes/eventos/'.$eve->imagen)}}" alt="{{$eve->nombre}}" class="image-thumbnail" height="200px" width="200px">
						</td>
						<td>{{$eve->Estado_id}}</td>
						<td>{{$eve->empresa_id}}</td>
						<td>
							<a href="{{route('evento.edit', $eve->id)}}"> 
								<button class="btn btn-info">Editar</button></a>

							<a href="" data-target="#modal-delete-{{$eve->id}}" data-toggle="modal">
								<button class="btn btn-danger">Eliminar</button>
							</a>
							<a href="" data-target="#modal-vista-{{$eve->id}}" data-toggle="modal">
								<button class="btn btn-primary">Ver Evento</button>
							</a>
						</td>
					</tr>
					@include('partner.evento.modal')
					@include('partner.evento.modal-imagen')
					@endforeach
					
				</table>
				
			</div>
			<!--para la paginacion-->
			{{$evento->render()}}
		</div>
	</div>
@endsection