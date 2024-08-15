@extends('layaout.main_template')

@section('content')

    <h2>Detalles cliente:{{$client->name}}</h2>
    <h3>Primer apellido: {{$client->last_name}}</h3>
    <h3>Segundo apellido: {{$client->s_lastname}}</h3>
    <h3>Email: {{$client->email}}</h3>
    <h3>Teléfono: {{$client->phone}}</h3>
    <h3>Estado: {{$client->state}}</h3>
    <h3>Ciudad: {{$client->town}}</h3>
    
@endsection