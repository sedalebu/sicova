@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					@if($msj)
					<br/><div class='rechazado'><label style='color:#FA206A'><h4><?php  echo $msj; ?></h4></label>  </div>
					@endif
				</table>
			</div>	
		</div>
		

	</div>

</div>


@endsection