@extends('template')

@section('content')
	<div class="row" style="padding-top: 2em;">
		<div class="col col-md-8 offset-2">
			<div class="row">
				<div class="col">
					<label>Nombre</label>
					<input type="text" id="nombre" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label>Edad</label>
					<input type="number" id="edad" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label>Email</label>
					<input type="text" id="email" class="form-control">
				</div>
			</div>
			<div class="row" style="padding-top: 2em;">
				<div class="col">
					<input type="button" id="guardar" class="btn btn-success" value="Guardar">
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		$('#guardar').click(function(){
			$.ajax({
				url: "{{route('save')}}",
				type: "POST",
				data:{
					nombre: $('#nombre').val(),
					edad: $('#edad').val(),
					email: $('#email').val(),
					_token: '{{ csrf_token() }}'
				},
				dataType: 'json',
				success: function(){
					window.location.href = "/index";
				},
			});
		});
	</script>
@endsection