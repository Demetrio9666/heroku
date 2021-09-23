@extends('layouts.pdf')
@section('nombre_tabla')
Registros de Ubicaciones Inactivos
@endsection

@section('tabla')
<table id="tabla" class="table table-striped table-bordered" style="width:100%">         
    <thead>            
        <tr>
            <th>Nombre de ubicación</th>
            <th>Descripción</th>
            <th>Estado Actual</th> 
        </tr>
    </thead>
    <tbody>  
        @foreach ($ubicacion as $i)        
        <tr>
            <td>{{$i->location_d}}</td>
            <td >{{$i->description}}</td>
            <td >{{$i->actual_state}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
<form>
</form>