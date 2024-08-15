@extends('layaout.main_template')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Página de productos</h2>

    <div class="text-center mb-4">
        <a href="{{route('products.create')}}" class="btn btn-primary">Registrar producto</a>
    </div>

    <!-- Centrar el título de la tabla -->
    <h4 class="text-center mb-4">Lista de productos</h4>

    <div class="table-responsive">
        <!-- Agregar el marco a la tabla -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Imagen</th>
                    <th>Más detalles</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <td> {{$p->nameProduct}}</td>
                        <td> {{$p->stock}}</td>
                        <td> {{$p->unit_price}}</td>
                        <td> {{$p->BrandFunction->brand}}</td>
                        <td> <img src="/image/products/{{$p->image}}" width="100" alt="Imagen del producto"></td>
                        
                        <td>
                            <button class="btn btn-info"><a href="{{route('products.show', $p)}}" class="text-white">Mostrar</a></button>
                        </td>
                        <td>
                            <button class="btn btn-warning"><a href="{{route('products.edit', $p)}}" class="text-white">Editar</a></button>
                        </td>
                        <td>
                            <form action="{{route('products.destroy', $p)}}" method="POST" style="display:inline;">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>  
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Paginación -->
    {{$products->links()}}
</div>
@endsection
