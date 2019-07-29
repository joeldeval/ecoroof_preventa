<html>
    <head>
        
        @include('layouts.partials.head')
        {{-- <link rel="stylesheet" href="css/style.css" > --}}
        <style>
            body{
                background: url(http://www.ecoroof.com.mx/images/pasto.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                font-family:'HelveticaNeue','Arial', sans-serif;
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>


</html>