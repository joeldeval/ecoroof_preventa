

<!DOCTYPE html>
<html>
    <head>
        <title>Ecoroof</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            img{
                height: 300px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src='http://ecoroof.com.mx/images/logo.jpg'>
                <h1>
                    ¡Preventa especial Talend land!
                </h1>
                <h3>adquiere a precio preferencial tu Eco Roof</h3>
                <br>
                <br>
                <form method="POST" action="/prevent/register">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">Nombre completo</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Escribe tu nombre completo" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('name') }}                        
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono / Celular</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Ejemplo: 3311122314" value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                        <div class="alert alert-danger" role="alert">
                        {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@mail.com" value="{{ old('email') }}">
                        @if ($errors->has('email'))                        
                        <div class="alert alert-danger" role="alert">
                        {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="howMany">¿Cuantos metros cuadrados estás interesado en comprar?</label>
                        <input type="number" class="form-control" id="howMany" name="howMany" placeholder="Ejemplo: 10" value="{{ old('howMany') }}">
                        @if ($errors->has('howMany'))                        
                        <div class="alert alert-danger" role="alert">                        
                        {{ $errors->first('howMany') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Registrarse en preventa</button>
                    </div>
                </form>
                <br>
                <br>
            </div>
        </div>
    
    </body>
</html>
