@extends ('layout')

@section ('contenido')

	<h1>Visita {{$data->id}}</h1>

	<p>Nombre: {{ $data->cliente }}</p>
	<p>comentario: {{ $data->comentario }}</p>


	<a href="{{ route('cobros.index') }}">Volver</a>
@stop
