@extends('layaout.main_template')

@section('content')

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Estilos para la barra de navegación superior */
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #ff80b3; /* Color rosa */
            padding: 15px 0;
        }

        .navbar a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-weight: bold;
            margin: 0 20px;
            font-size: 18px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        /* Centrar el contenido del cuerpo */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #ff80b3; /* Color de fondo ligero para contraste */
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        /* Estilos para el formulario */
        form {
            width: 300px;
            padding: 20px;
            border-radius: 12px;
            background-color: #ff80b3; /* Color rosa */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Alineación a la izquierda */
        }

        /* Estilos para las etiquetas */
        form label {
            display: block;
            width: 100%;
            color: white; /* Color del texto blanco */
            background-color: #ff80b3; /* Fondo rosa */
            text-align: left; /* Alineación a la izquierda */
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 5px;
            padding: 5px; /* Espacio alrededor del texto */
            border-radius: 4px; /* Borde redondeado para el fondo rosa */

            

            
        }

        form input[type="text"],
        form input[type="number"],
        form select,
        form input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        form button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ff80b3; /* Borde rosa */
            border-radius: 5px;
            background-color: white; /* Fondo blanco */
            color: #ff80b3; /* Texto rosa */
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
        }

        form button[type="submit"]:hover {
            background-color: #fce4ec; /* Fondo blanco con un tono rosa claro en hover */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>

   

    <div class="container">
        <h2>Actualizar producto: {{$product->nameProduct}}</h2>

        <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="nameProduct">Producto</label>
            <input type="text" name="nameProduct" id="nameProduct" value="{{$product->nameProduct}}">

            <label for="stock">Cantidad</label>
            <input type="number" name="stock" id="stock" value="{{$product->stock}}">

            <label for="unit_price">Precio unitario</label>
            <input type="text" name="unit_price" id="unit_price" value="{{$product->unit_price}}">

            <label for="id_brand">Marca</label>
            <select name="id_brand" id="id_brand">
                <option value="">Seleccionar...</option>
                @foreach ($brands as $brand => $id)
                    <option value="{{$id}}" {{$product->id_brand == $id ? 'selected' : ''}}>{{$brand}}</option>
                @endforeach
            </select>

            <label for="image">Imagen</label>
            <input type="file" name="image" id="image">

            <button type="submit">Actualizar</button>
        </form>
    </div>

@endsection
