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
							<h1><a href="video.html" class="css3-4" data-target="#modal-vista-{{$p->id}}" data-toggle="modal">{{$p->nombre}}</a></h1>
						</article>
					</div>
				</div>
				<div class="modal fade modal-slide-in-right" aria-hidden="true"  role="dialog" tabindex="-1" id="modal-vista-{{$p->id}}">
					<div class="modal-dialog" style="background-color: white">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span  aria-hidden="true">x</span>
							</button>
							<h4 class="modal-title"> Paquete {{$p->nombre}}</h4>
						</div>
						<div class="modal-body">
							<center>
								<img src="{{asset('images/paquete/'.$p->imagen)}}" alt="{{$p->nombre}}" class="img-responsive" height="300px" width="500px">
							</center>
										<h3>
											Descripción del evento {{$p->nombre}}
										</h3>
										<p>
											{{$p->descripcion}}
										</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cerrar
							</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">
								Comprar
							</button>
						</div>
					</div>
				</div>
				@endforeach
				<div class="clear"></div>	
			</div>
     {{$paquete->render()}}
@endsection