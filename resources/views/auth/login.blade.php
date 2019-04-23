
@extends('layouts.login')

@section('content')


<form class='form-signin' method="POST" action="/auth/login">
    {!! csrf_field() !!}
    
    <div class="text-center mb-4">
        <img class="mb-4" src="http://ecoroof.com.mx/images/logo.jpg" alt="" width="300" height="auto">
    </div>
    @if (count($errors) > 0)
        @foreach($errors->all() as $error)       
            <div class="alert alert-danger" role="alert">
                <li>{{ $error }}</li>
            </div>
        @endforeach
    @endif
    <div class="form-group">
        <input type="text" class="form-control" id="email"  name="email" aria-describedby="emailHelp" placeholder="Usuario" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
    </div>
    <button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
    <p class="mt-5 mb-3 text-muted text-center">© Eco Roof</p>
</form>
@stop


