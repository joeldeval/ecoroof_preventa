

@extends('layouts.guest')

@section('content')
<div class="container">
    
    <div class="row" style="background: #ffffffd1;padding-bottom: 10px;padding-top: 10px;border-radius: 50px;padding-left: -100px;">
        <div class="col-md-6 order-md-1 col-md-offset-3">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="http://ecoroof.com.mx/images/logo.png" alt="" width="200">
                <h2>¡Preventa especial!</h2>
                <p class="lead">Regístrate y adquiere a precio preferencial tu Eco Roof.</p>
            </div>
        </div>
        <div class="col-md-6 order-md-1 col-md-offset-3">
            <form class="needs-validation"  method="POST" action="/prevent/register" novalidate="">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Nombre completo *</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Escribe tu nombre completo" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('name') }}                        
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="idCampaign">¿Cómo te enteraste? *</label>
                        <select class="form-control" id="idCampaign" name="idCampaign">
                            <option value="">-- Seleccione una opción --</option>
                            @foreach($campaign as $item)
                                <option value="{!!$item->id!!}">{!!$item->name!!}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('idCampaign'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('idCampaign') }}                        
                        </div>
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone">Teléfono / Celular *</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Ejemplo: 3311122314" value="{{ old('phone') }}" maxlength="10">
                        @if ($errors->has('phone'))
                        <div class="alert alert-danger" role="alert">
                        {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Correo electrónico *</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@mail.com" value="{{ old('email') }}">
                        @if ($errors->has('email'))                        
                        <div class="alert alert-danger" role="alert">
                        {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="howMany">¿Cuantos metros cuadrados estás interesado en comprar? *</label>
                        <input type="number" class="form-control" id="howMany" name="howMany" placeholder="Ejemplo: 10" value="{{ old('howMany') }}">
                        @if ($errors->has('howMany'))                        
                        <div class="alert alert-danger" role="alert">                        
                        {{ $errors->first('howMany') }}
                        </div>
                        @endif
                    </div>
                </div>
                <br>
                <button class="btn btn-success col-md-6 mb-3 btn-lg btn-block" type="submit">Registrarse en preventa</button>
            </form>
        </div>
    </div>
    <br>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2019 Eco Roof</p>
        {{-- <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul> --}}
    </footer>
</div>

@stop
