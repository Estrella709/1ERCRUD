<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #ff66a3; /* Color de fondo rosado */
            color: #ffffff; /* Color del texto blanco para contraste */
        }
        
        .navbar {
            background-color: #ff3385; /* Fondo de la barra de navegación */
        }
        
        .navbar a {
            color: #ffffff; /* Color del texto en la barra de navegación */
        }

        .btn-primary {
            background-color: #ff3385; /* Botones principales rosados */
            border-color: #ff3385;
        }

        .btn-primary:hover {
            background-color: #e62e78; /* Oscurecer al hacer hover */
            border-color: #e62e78;
        }

        .container {
            background-color: #ffffff;
            color: #333333; /* Texto oscuro en los contenedores */
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
    </style>
</head>

<body>
    @include('fragments.navbar')

    @if (@session('status'))
        <div class="alert alert-success text-center">
            {{session('status')}}
        </div>
    @endif

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
