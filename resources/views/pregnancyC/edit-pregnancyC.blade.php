@extends('pregnancyC.base')
@section('nombre_regitro')
Editar Control de preñez
@endsection
@section('formulario')
<form action="{{route('controlPrenes.update',$pre->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <label for="">Fecha de Vacunacion:</label>
            <input type="date" class="form-control" id="fecha_r" name="date" value="{{$pre->date}}">
        </div>
        <div class="col-md-6">
                <div class="input-group mb-3" style="margin: 40px">
                        <button class="btn btn-primary" type="button" id="button-addon1"  data-toggle="modal" data-target="#modalanimal" >Buscar</button>
                        <input type="text"  placeholder="Código Animal"   aria-label="Example text with button addon" aria-describedby="button-addon1"  id="codigo_animal" disabled=disabled 
                        @foreach ($animal as $i)
                                    @if ($pre->animalCode_id == $i->id )
                                         value =" {{$i->animalCode}} "
                                    @endif
                        @endforeach>
                       
                       
                        <input type="hidden" id="idcodi" name="animalCode_id" value="{{$pre->animalCode_id}}">
                        
                </div>
        </div>
        <div class="form-group">
            <label for="">Vitamina:</label>
            <select class="form-control" id="inputPassword4"  name="vitamin_id"   value="{{$pre->vitamin_id}}">
                <option selected></option>
                @foreach ($vitamina as $i )   
                    <option value="{{$i->id}}" @if($pre->vitamin_id == $i->id ) selected @endif>{{$i->vitamin_d}}</option>
                    
                @endforeach
          </select>
        </div>  
    
        <div class="form-group">
            <label for="">Alternativa 1 de Vitamina:</label>
            <select class="form-control" id="inputPassword4"  name="alternative1"   value="{{$pre->alternative1}}">
                <option selected>N/A</option>
                @foreach($vitamina as $i )   
                <option {{$i->id}}  @if($pre->alternative1 == $i->vitamin_d ) value= "{{$i->vitamin_d}}"  selected  @endif>{{$i->vitamin_d}}</option>
                    
                @endforeach
          </select>
        </div>  
        <div class="form-group">
            <label for="">Alternativa 2 de Vitamina:</label>
            <select class="form-control" id="inputPassword4"  name="alternative2"   value="{{$pre->alternative2}}">
                <option selected>N/A</option>
                @foreach ($vitamina as $i )   
                <option {{$i->id}}  @if($pre->alternative2 == $i->vitamin_d ) value= "{{$i->vitamin}}" selected  @endif>{{$i->vitamin_d}}</option>
                    
                @endforeach
          </select>
        </div>  
        <div class="form-group">
            <label for="">Observación:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observation">{{$pre->observation}}</textarea>
        </div>
    
        <div class="form-group">
            <label for="">Fecha de próximo control:</label>
            <input type="date" class="form-control" id="fecha_r" name="date_r" value="{{$pre->date_r}}">
        </div>
        <div  class="form-group">
            <label for="">Estado Actual:</label>
            <select class="form-control" id="inputPassword4" name="actual_state" value="{{$pre->actual_state}}">
                <option value="DISPONIBLE" @if( $pre->actual_state == "DISPONIBLE") selected @endif>DISPONIBLE</option>
                <option value="INACTIVO" @if( $pre->actual_state == "INACTIVO") selected @endif>INACTIVO</option>
             </select>
        </div> 
         <center>
            <div class="col-md-6" style="margin: 40px">
                <a type="submit" class="btn btn-secondary btn" href="{{url('/controlPrenes')}}">Cancelar</a>
                <button type="submit" class="btn btn-success btn"  href="{{ Redirect::to('/controlPrenes') }}" >Guardar</button>
            </div>
        </center>   
        
    </div>
    @include('layouts.base-usuario')
</form>
<script>
   
  
            ////bloqueo de fechas futuras
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1;
            var yyyy = today.getFullYear();
            if(dd<10){
                    dd='0'+dd
                } 
                if(mm<10){
                    mm='0'+mm
                } 

            today = yyyy+'-'+mm+'-'+dd;
            document.getElementById("fecha").setAttribute("max", today);
  </script>
@endsection


