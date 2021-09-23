
@extends('layouts.baseTablas')

@section('nombre_card')
        Registros de Partos
@endsection

@section('boton_registro')
"{{url('fichaParto/create')}}"
@endsection
@section('boton_reciclaje')
"{{url('inactivos/fichaPartos')}}"
@endsection
@section('boton_reporte_excel')
"{{url('exportar-excel-fichaParto')}}"
@endsection
@section('boton_reporte_pdf')
"{{url('descarga-pdf-fichaParto')}}"
@endsection

@section('nombre_tabla')
Fichas de Partos
@endsection
@section('tabla')
            <table id="tabla" class="table table-striped table-bordered" style="width:100%">
                <thead>             
                    <tr>
                        <th>Fecha</th>
                        <th>Código del Animal</th>
                        <th>Cant.Machos </th>
                        <th>Cant.Hembras</th>
                        <th>Cant.Muertos</th>
                        <th>Estado Animal</th>
                        <th>Tipo de Parto</th>
                        <th>Estado Actual</th> 
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($par as $i)          
                    <tr>
                        <td>{{$i->date}}</td>
                        <td>{{$i->animal}}</td>
                        <td >{{$i->male}}</td>
                        <td >{{$i->female}}</td>
                        <td >{{$i->dead}}</td>
                        <td >{{$i->mother_status}}</td>
                        <td >{{$i->partum_type}}</td>
                        <td >{{$i->actual_state}}</td>
                        <td>
                            <center>
                                <a class="btn btn-primary" href="{{route('fichaParto.edit',$i->id)}}" ><i class="fas fa-edit"></i></a>
                            </center>
                            
                                                
                        </td>  
                    </tr>
                    @endforeach 
                </tbody>
            </table>
@endsection





  
    
