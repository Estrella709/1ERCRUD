@extends('layaout.main_template')

@section('content')
    

<h2 class="text-center mb-4">Registrar ventas</h2>
    
    
    <form action="{{route('sales.store')}}" method="POST">
        @csrf
        <label for="">Cliente</label>
        <input type="int" name="id_client" required>

        <label for="">Producto</label>
        <input type="int" name="id_product" required>

        <label for="">Fecha</label>
        <input type="date" name="sale_date" required>

    

        <button type="submit">Registrar</button>



    </form>
@endsection