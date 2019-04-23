<!DOCTYPE html>
<html>
    <head>
        <title>Ecoroof</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
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
                font-size: 50px;
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
                <div class="title">Gracias por registrarte en nuestra preventa</div>
            </div>
        </div>
        <script>
            setTimeout(() => redirectPage(), 2000);
            
            function redirectPage(){
                console.log('dasdsa')
                window.location.href = 'https://www.facebook.com/EcoRoofmx/';
            }
        </script>
    </body>
</html>
