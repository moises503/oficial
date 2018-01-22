<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <style>

        footer{
            color: black;
            background-color: #FFFFFF;
            padding: 10px 0 10px 0;
            position: fixed;
            bottom:0;
            width: 30%;
        }

        html, body {

            color: black;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }

    </style>
</head>
<body>



<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cruz Blanca</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ciudadanos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('ciudadano.index') }}">Ver Ciudadanos</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tequios <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('tequio.index') }}">Ver Tequios</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asambleas <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('asamblea.index') }}">Ver Asambleas</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cooperaciones <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('cooperacion.index') }}">Ver Cooperaciones</a></li>
                    </ul>
                </li>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<p style="margin-bottom:80px"></p>



<div class="container">
    @yield('content')
</div>

<!-- <footer class="footer">
      <div class="container">
        Cruz Blanca censo poblacional 2017-2018
      </div>
    </footer> -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>