@extends ('layout')

@section ('contenido')

	<h1>Nueva Cobro</h1>

	@if(session()->has('info'))

		<h3>{{session('info')}}</h3>

	@else
	<form action="{{route('cobros.store')}}" method="POST" >
	{!! Csrf_field() !!}

        <p><label for="fecha">
			Cliente:
            <input class="form-control" type="text" name="fecha" value="{{  Carbon\Carbon::today()}}" >
            </label>{{$errors->first('fecha')}} </p>

		<p><label for="cliente">
			Cliente:
			<input class="form-control" type="text" name="cliente" >

		</label>{{$errors->first('cliente')}} </p>

		<p><label for="comentario">
            Comentario:
        </p>
            <textarea name="comentario" ></textarea>

		</label>{{$errors->first('comentario')}} </p>

        <p><input class="btn btn-primary"type="submit" value="Guardar"></p>
	</form>
	@endif
	<a href="{{route('cobros.index')}}">Volver</a>
@stop
