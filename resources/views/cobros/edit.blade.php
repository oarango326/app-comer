@extends ('layout')

@section ('contenido')

	<h1>Nueva Cobro</h1>

	@if(session()->has('info'))

		<h3>{{session('info')}}</h3>

	@else
	<form action="{{route('cobros.update', $data->id)}}" method="POST" >
    {{ method_field('PUT') }}
	{!! Csrf_field() !!}

        <p><label for="fecha">
			Cliente:
            <input class="form-control" type="text" name="fecha" value="{{ $data->fecha }}" >
            </label>{{  $errors->first('fecha')}} </p>

		<p><label for="cliente">
			Cliente:
			<input class="form-control" type="text" name="cliente" value="{{$data->cliente  }}" >

		</label>{{$errors->first('cliente')}} </p>1

		<p><label for="comentario">
            Comentario:
        </p>
            <textarea name="comentario" value="{{ $data->comentario }}" ></textarea>

		</label>{{$errors->first('comentario')}} </p>

        <p><input class="btn btn-primary"type="submit" value="Guardar"></p>
	</form>
	@endif
	<a href="{{route('cobros.index')}}">Volver</a>
@stop
