@extends('layaout.main_template')

@section('content')


    <h2 class="text-center">Registrar cliente</h2>
    
    <form action="{{ route('clients.store') }}" method="POST" class="custom-form">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="last_name">Primer apellido</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="s_lastname">Segundo apellido</label>
            <input type="text" name="s_lastname" id="s_lastname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="number" name="phone" id="phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="state">Estado</label>
            <input type="text" name="state" id="state" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="town">Ciudad</label>
            <input type="text" name="town" id="town" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-submit">Registrar</button>
    </form>
@endsection
