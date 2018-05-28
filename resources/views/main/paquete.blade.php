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
		   <div class="section group">
		   	@foreach ($paquete as $p)
				
		   	   <div class="col_1_of_3 span_1_of_3">
				   <div class="container1 right">
						<img src="{{asset('images/paquete/'.$p->imagen)}}">
						<article class="text css3-4">
							<h1><a href="video.html" class="css3-4" data-target="#modal-vista-{{$p->id}}" data-toggle="modal">{{$p->nombreEv}}</a></h1>
						</article>
					</div>
				</div>
				<div class="modal fade modal-slide-in-right" aria-hidden="true"  role="dialog" tabindex="-1" id="modal-vista-{{$p->id}}">
				
				<div class="modal-dialog" style="background-color: white">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span  aria-hidden="true">x</span>
							</button>
							<h4 class="modal-title"> Paquete {{$p->nombreEv}}</h4>
						</div>
						<div class="modal-body">
							<center>
								<img src="{{asset('images/paquete/'.$p->imagen)}}" alt="{{$p->nombrePa}}" class="img-responsive" height="300px" width="500px">
							</center>
										<h3>
											Descripción del evento {{$p->nombreEv}}
										</h3>
										<p>
											Precio: S/.{{$p->precio}}
										</p>
										<p>
											Capacidad: {{$p->nr_personas}}
										</p>
										<p>
											Lugar: {{$p->nom_paquete}}
										</p>
										<p>
											Categoria: {{$p->nombrePa}}
										</p>
										
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cerrar
							</button>
							<a href="{{url('main/shoppincar',$p->id)}}" class="btn btn-default">Agregar</a>
								

						</div>
					</div>
					
				</div>
				@endforeach
				<div class="clear"></div>	
			</div>
     {{$paquete->render()}}
@endsection