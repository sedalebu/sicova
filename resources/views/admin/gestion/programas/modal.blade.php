<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$pro->idprograma}}">

	{{Form::Open(array('action'=>array('ProgramaController@destroy',$pro->idprograma),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				 	<span aria-hidden='true'>x</span>

				 </button>
				 <h4 class="modal-title">Eliminar programa?</h4>
			</div>
			<div class="body">
				<p>	Confirme si desea eliminar la programa</p>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div> 
	{{Form::Close()}}
	
</div>
