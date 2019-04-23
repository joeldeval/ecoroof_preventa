<html>
    <head>
        
        @include('layouts.partials.head')
    </head>
    <body>
        <div class="container">
            @include('layouts.partials.nav')
            @yield('content')
        </div>
        @include('layouts.partials.footer-scripts')
        @yield('scripts')
    </body>
</html>