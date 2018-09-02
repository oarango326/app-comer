@extends ('layout')

@section ('contenido')

	<h1>Login</h1>
	<form class="form-inline" method="post" action="{{ route('login') }}" >
		{!!Csrf_field()!!}
		<input class="form-control" type="text" name="email" placeholder="Email">

		<input class="form-control" type="password" name="password" placeholder="Password">

		<input class="btn btn-primary" type="submit" name="btn-entrar" value="Entrar">
	</form>
@stop	
