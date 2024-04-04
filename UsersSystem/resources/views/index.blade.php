@extends('template')

@section('content')
	<div style="padding-top: 2em;">
		<a href="{{route('create')}}" class="btn btn-primary">Create socio</a>	

	</div>
	
	<div style="padding-top: 2em;">
		<table class="table" >
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Edad</th>
					<th scope="col">Email</th>
					<th scope="col">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($socios as $socio)
				<tr>
					<td>{{ $socio->id }}</td>
					<td>{{ $socio->nombre}}</td>
					<td>{{ $socio->edad }}</td>
					<td>{{ $socio->email }}</td>
					<td>
						<input type="button" data-id="{{ $socio->id }}" class="btn btn-danger delete" value="Delete">
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<script type="text/javascript">
		$('.delete').click(function(){
			const id = $(this).data('id');
			console.log(id);
			//*/
			$.ajax({
				url: "{{route('delete')}}",
				type: "POST",
				data:{
					id: id,
					_token: '{{ csrf_token() }}'
				},
				dataType: 'json',
				success: function(){
					window.location.reload();
				},
			});
			//*/
		});
	</script>
@endsection