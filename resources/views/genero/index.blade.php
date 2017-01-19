@extends('layouts.admin')
	@section('content')
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Genero Actualizado Correctamente.</strong>
	</div>
	<div id="msj-danger" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
  		<strong> Genero Eliminado Correctamente.</strong>
	</div>
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Operaciones</th>
			</thead>

			<tbody id="datos"></tbody>
		</table>

		@include('genero.modal')
	@endsection

	@section('scripts')
		{!!Html::script('js/script2.js')!!}
	@endsection
