@extends('adminlte::page')
@section('css')

@endsection
@section('content_header')
<label>Hora:</label>
    <br>
    <div id="reloj" class="reloj">00 : 00 : 00</div>
    <br>
    <br>
<div class="card card-dark">
    <div class="card-header">
    <h3 class="card-title">
        <i class="fas fa-book"></i>
        @yield('nombre_regitro')  </h3>
    </div>

   <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">

            @yield('formulario')
            
        </div>
    </div>
</div> 
@include("modal.modalAnimalesEX")
@endsection
@section('js')
<script>
            $('#modalanimalEx').on('shown.bs.modal', function () {
            $('#myInput2').trigger('focus')
             });
           
                $('#tabla').on('click','.btselect',function(){
                        var self = $(this).closest("tr");
                        var col1 = self.find(".col1").text();
                        var col2 = self.find(".col2").text();
                        var col3 = self.find(".col3").text();
                        var col4 = self.find(".col4").text();
                        var col5 = self.find(".col5").text();
                            $("#idcodi").val(col1);
                            $("#codigo_animal").val(col2);
                            $("#raza").val(col3);
                            $("#edad").val(col4);
                            $("#sexo").val(col5);
                        });

           function Validar(id){
                if(id <=21){
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Solo animales mayores a 21 meses de edad ',
                        confirmButtonColor: '#3733dc',
                    }) 
                    var x=document.getElementById("age_month").value ="";
                }           
                else{
                    console.log('bien')
                }
            }
           function upperCase() {
                var x=document.getElementById("hacienda_name").value
                document.getElementById("hacienda_name").value=x.toUpperCase()
                var x=document.getElementById("animalCode_Exte").value
                document.getElementById("animalCode_Exte").value=x.toUpperCase()
            }

     
</script>

@endsection
 <script>
      $('#tabla').on('click','.btselect',function(){
                        var self = $(this).closest("tr");
                        var col1 = self.find(".col1").text();
                        var col2 = self.find(".col2").text();
                        var col3 = self.find(".col3").text();
                        var col4 = self.find(".col4").text();
                        var col5 = self.find(".col5").text();
                            $("#idcodi").val(col1);
                            $("#codigo_animal").val(col2);
                            $("#raza").val(col3);
                            $("#edad").val(col4);
                            $("#sexo").val(col5);
                        });
 </script>