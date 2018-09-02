@extends ('layout')

@section ('contenido')
	<h1>Visitas</h1>
	@if(session('status'))
		<h1>{{session('status')}}</h1>
		<a href="{{route('visitas.index')}}">Volver</a>
	@else
			<a href="{{route('visitas.create')}}">Crear Nueva Visita</a>
			<table class="table"  >
			<tr>
				<th>ID</th>
				<th>Cliente</th>
				<th>Tipo</th>
				<th>Accion</th>
			</tr>
			@foreach($visitas as $visita)
				<tr>
					<td>{{$visita->id}}</td>
					<td>{{$visita->cliente}}</td>
					<td>{{$visita->tipo}}</td>
					<td>	
						<a class="btn btn-light btn-xs" href="{{ route('visitas.show' , $visita->id)}}">Detalles</a>
						<a class="btn btn-primary btn-xs" href="{{ route('visitas.edit' , $visita->id)}}">Modificar</a>
						<form style="display: inline" action="{{route('visitas.destroy', $visita->id)}}" method="POST" >
							{!!Csrf_field()!!}
							{!!method_field('DELETE')!!}
							<button class="btn btn-danger btn-xs"type="submit" >Eliminar</button>
						</form>
						
					</td>

				</tr>
			@endforeach
		</table>
	@endif

@stop