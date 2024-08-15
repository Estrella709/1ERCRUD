@extends('layaout.main_template')

@section('content')

<table>
    
    <h2>Detalles venta:</h2>
    <h3>Cliente: {{$sale->id_client}}</h3>
    <h3>Producto: {{$sale->id_product}}</h3>
    <h3>Fecha: {{$sale->sale_date}}</h3>
</table>
   
   
    
@endsection