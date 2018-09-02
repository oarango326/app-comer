@extends ('layout')

@section ('contenido')
	<h1>cobros</h1>
	@if(session('status'))
		<h1>{{session('status')}}</h1>
		<a href="{{route('cobros.index')}}">Volver</a>
	@else
			<a href="{{route('cobros.create')}}">Crear Nuevo Cobro</a>
			<table class="table"  >
			<tr>
                <th>ID</th>
                <th>fecha</th>
                <th>cliente</th>
				<th>comentario</th>
				<th>Accion</th>
			</tr>
			@foreach($datas as $data)
				<tr>
					<td>{{$data->id}}</td>
                    <td>{{ $data->fecha }}</td>
                    <td>{{ $data->cliente}}</td>
					<td>{{$data->comentario}}</td>
					<td>
						<a class="btn btn-light btn-xs" href="{{ route('cobros.show' , $data->id)}}">Detalles</a>
						<a class="btn btn-primary btn-xs" href="{{ route('cobros.edit' , $data->id)}}">Modificar</a>
						<form style="display: inline" action="{{route('cobros.destroy', $data->id)}}" method="POST" >
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
