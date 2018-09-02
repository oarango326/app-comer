@extends ('layout')

@section ('contenido')

	<h1>Visita # {{$visita->id}}</h1>

	<p>Nombre: {{$visita->cliente}}</p>
	<p>Tipo: {{$visita->tipo}}</p>
	

	<a href="{{route('visitas.index')}}">Volver</a>
@stop