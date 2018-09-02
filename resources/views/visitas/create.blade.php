@extends ('layout')

@section ('contenido')

	<h1>Nueva visita</h1>

	@if(session()->has('info'))

		<h3>{{session('info')}}</h3>

	@else
	<form action="{{route('visitas.store')}}" method="POST" >
	{!! Csrf_field() !!}

		<p><label for="cliente">
			Cliente:
			<input class="form-control" type="text" name="cliente" value="{{old('cliente')}}">

		</label>{{$errors->first('cliente')}} </p>

		<p><label for="tipo">
			Tipo:
			<input class="form-control" type="text" name="tipo" value="{{old('tipo')}}">
		</label>{{$errors->first('tipo')}} </p>
		<p><input class="btn btn-primary"type="submit" value="Guardar"></p>
	</form>
	@endif
	<a href="{{route('visitas.index')}}">Volver</a>
@stop
