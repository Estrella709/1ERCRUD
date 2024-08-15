@extends('layaout.main_template')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center">Página de clientes</h2>
        <br>
        <div class="text-center mb-4">
            <a href="{{route('clients.create')}}" class="btn btn-primary">Registrar Cliente</a>
        </div>

        <h3 class="text-center mb-4">Lista de productos</h3>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" style="background-color: #ffffff;">
                <thead class="thead-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Primer apellido</th>
                        <th>Segundo apellido</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Estado</th>
                        <th>Ciudad</th>
                        <th>Más detalles</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $c)
                        <tr>
                            <td> {{$c->name}}</td>
                            <td> {{$c->last_name}}</td>
                            <td> {{$c->s_lastname}}</td>
                            <td> {{$c->email}}</td>
                            <td> {{$c->phone}}</td>
                            <td> {{$c->state}}</td>
                            <td> {{$c->town}}</td>
                            <td>
                                <a href="{{route('clients.show', $c)}}" class="btn btn-info">Mostrar</a>
                            </td>
                            <td>
                                <a href="{{route('clients.edit', $c)}}" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('clients.destroy', $c)}}" method="POST" style="display:inline;">
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

