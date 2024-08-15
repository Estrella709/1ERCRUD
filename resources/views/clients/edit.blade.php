@extends('layaout.main_template')

@section('content')
    
    <style>
        /* Estilo personalizado para el formulario */
        .custom-form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 12px;
            margin: auto;
            background-color: #ff66a3;(255, 127, 148) (255, 0, 255); /* Color rosado de fondo */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-form .form-label {
            font-weight: bold;
            color: #ffffff; /* Color blanco para el texto de las etiquetas */
        }

        .custom-form .btn-submit {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #ffffff; /* Fondo blanco para el botón */
            color: rgb(255, 128, 179); /* Texto del botón en rosado */
            border: 2px solid #ffffff;
            transition: background-color 0.3s, color 0.3s;
        }

        .custom-form .btn-submit:hover {
            background-color: #ff66a3; /* Fondo rosado más oscuro al hacer hover */
            color: #ffffff; /* Texto blanco al hacer hover */
        }

    </style>

    <h2 class="text-center mb-4">Actualizar cliente: {{$client->name}}</h2>
    
    <form action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data" class="custom-form">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}" required>
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Primer apellido</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$client->last_name}}" required>
        </div>

        <div class="mb-3">
            <label for="s_lastname" class="form-label">Segundo apellido</label>
            <input type="text" class="form-control" id="s_lastname" name="s_lastname" value="{{$client->s_lastname}}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$client->email}}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{$client->phone}}" required>
        </div>

        <div class="mb-3">
            <label for="state" class="form-label">Estado</label>
            <input type="text" class="form-control" id="state" name="state" value="{{$client->state}}" required>
        </div>

        <div class="mb-3">
            <label for="town" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="town" name="town" value="{{$client->town}}" required>
        </div>

        <button type="submit" class="btn btn-submit">Actualizar</button>
    </form>
@endsection
