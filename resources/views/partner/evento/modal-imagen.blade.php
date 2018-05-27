<div class="modal fade modal-slide-in-right" aria-hidden="true"  role="dialog" tabindex="-1" id="modal-vista-{{$eve->id}}">
	<div class="modal-dialog" style="background-color: white">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span  aria-hidden="true">x</span>
			</button>
			<h4 class="modal-title"> Evento {{$eve->nombre}}</h4>
		</div>
		<div class="modal-body">
			<center>
				<img src="{{asset('images/eventos/'.$eve->imagen)}}" alt="{{$eve->nombre}}"  height="300px" width="500px">
			</center>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3>
							Descripción del evento {{$eve->nombre}}
						</h3>
						<p>
							{{$eve->descripcion}}
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">
				Cerrar
			</button>
		</div>
	</div>

</div>