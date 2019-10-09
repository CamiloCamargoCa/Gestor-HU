<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestor Historias Usuarios</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Styles -->
        <style>
            /*html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }*/

            body {
                background: url({{ asset('img/PostItHistoriaUsuario.png') }})no-repeat;
                background-size: 50%;
                background-position: top;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                
            }

            /*.full-height {
                height: 100vh;
            }*/

            /*.flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }*/

            /*.position-ref {
                position: relative;
            }
*/
            /*.top-right {
                position: absolute; 
                left: 10px;
                top: 18px;
                background: #030b5c;
                box-shadow: 1px 1px 5px 5px grey;
            }*/

            /*.content {
                text-align: center;
            }

            .title {
                font-size: 55px;
                color: #030b5c;
                margin-top: 6%;
            }*/

            /*.links > a {
                color: #636b6f;
                color: whitesmoke;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }*/

            /*div{
                border:1px solid black;
            }*/

            /*.m-b-md {
                margin-bottom: 30px;
            }*/
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-4">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="btn btn-default" href="{{ url('/home') }}">Inicio</a>
                        @else
                            <a class="btn btn-default" href="{{ route('login') }}">Acceder</a>

                            @if (Route::has('register'))
                                <a class="btn btn-primary" href="{{ route('register') }}">Registro</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        {{-- </div> --}}
        
        {{-- <div class="row"> --}}
            <div class="col-xs-8 col-sm-9 col-md-8">
                <h3 style="color:blue;font-weight: bold;">Gestor Historias de Usuario</h3>
            </div>
        </div>

          

        
    </body>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
