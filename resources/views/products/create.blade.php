@extends('layaout.main_template')

@section('content')

    <div class="container mt-4">
        <!-- Título centrado -->
        <h2 class="text-center mb-4">Registrar producto</h2>

        <!-- Mostrar errores -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario con estilo rosa -->
        <form action="{{ route('products.store') }}" method="POST" class="p-4 mx-auto border border-2 border-pink-500 rounded bg-pink-100">
            @csrf
            <div class="form-group">
                <label for="nameProduct" class="form-label">Producto</label>
                <input type="text" name="nameProduct" id="nameProduct" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="stock" class="form-label">Cantidad</label>
                <input type="number" name="stock" id="stock" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="unit_price" class="form-label">Precio unitario</label>
                <input type="text" name="unit_price" id="unit_price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_brand" class="form-label">Marca</label>
                <select name="id_brand" id="id_brand" class="form-control">
                    <option value="">Seleccionar...</option>
                    @foreach ($brands as $brand => $id)
                        <option value="{{ $id }}">{{ $brand }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-dark text-light">Registrar</button>
        </form>
    </div>
@endsection
