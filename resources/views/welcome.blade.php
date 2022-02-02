<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>South Flow Trails</title>

        <!-- Fonts -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">South Flow Trails</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Porque construimos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Comienza un proyecto</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Proyectos realizados</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"href="#">Diseños</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Videos</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
