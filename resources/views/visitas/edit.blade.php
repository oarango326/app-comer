@extends ('layout')

@section ('contenido')

	<h1>Nueva visita</h1>

	@if(session()->has('info'))

		<h3>{{session('info')}}</h3>
	
	
	@else
	<form action="{{route('visitas.update', $visita->id)}}" method="POST" >
	
	{!!Csrf_field()!!}
	{!!method_field('PUT')!!}

		<p><label for="cliente">
			Cliente:
			<input type="text" name="cliente" value="{{$visita->cliente}}">
			
		</label>{{$errors->first('cliente')}} </p>
		
		<p><label for="tipo">
			tipo: 
			<input type="text" name="tipo" value="{{$visita->tipo}}">
		</label>{{$errors->first('tipo')}} </p>
		<p><input type="submit" value="Guardar"></p>
	</form>
	@endif
	<a href="{{route('visitas.index')}}">Volver</a>
@stop