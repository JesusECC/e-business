<div class="modal fade modal-slide-in-right" aria-hidden="true"  role="dialog" tabindex="-1" id="modal-delete-{{$per->id}}">

{{Form::Open(array('action'=>array('PersonaController@destroy',$per->id),'method'=>'DELETE'))}}

	<div class="modal-dialog" style="background-color: white">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span  aria-hidden="true">x</span>
			</button>
			<h4 class="modal-title">Eliminar Persona {{$per->id}}</h4>
		</div>
		<div class="modal-body">
			<p>Confirme si desea Eliminar el tipo de documento {{$per->id}}</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">
				Cerrar
			</button>
			<button type="submit" class="btn btn-primary"> Confirmar</button>
		</div>
	</div>
{{Form::Close()}}
</div>