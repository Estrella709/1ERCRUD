@extends('layaout.main_template')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center">Página de ventas</h2>
        <br>
        <div class="text-center mb-4">
            <a href="{{route('sales.create')}}" class="btn btn-primary">Registrar Venta</a>
        </div>

        <h3 class="text-center mb-4">Lista de productos</h3>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" style="background-color: #ffffff;">
                <thead class="thead-light">
                    <tr>
                        <th>Cliente</th>
                        <th>Producto</th>
                        <th>Fecha</th>
                        <th>Más detalles</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $s)
                        <tr>
                            <td> {{$s->ClientFunction->name}}</td>
                            <td> {{$s->ProductFunction->nameProduct}}</td>
                            <td> {{$s->sale_date}}</td>
                            <td>
                                <a href="{{route('sales.show', $s)}}" class="btn btn-info">Mostrar</a>
                            </td>
                            <td>
                                <a href="{{route('sales.edit', $s)}}" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('sales.destroy', $s)}}" method="POST" style="display:inline;">
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
    </div>
@endsection
