@extends('adminlte::page')

@section('content_header')
<div class="card-header" style="background-color: rgb(152, 255, 221)">
    <h4 style="text-align: center"><strong>BOLETA DE INSCRIPCION</strong></h4>
  </div>
@stop

@section('content')
<div class="row no-gutters">
    <div class="col-12 col-sm-6 col-md-8">
        
    </div>

    <div class="col-6 col-md-4" style="text-align: right">
        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
            <a  class="btn btn-light"><i class="fas fa-regular fa-print"></i></a>
            <a  class="btn btn-light"><i class="fas fa-solid fa-download"></i></a>
          </div>
    </div>
</div> 

<div class="card">
        <ul class="list-group" style="text-align:left">
            <li class="list-group-item" style="font-size: medium"> <strong>Nombre: </strong> 
                Padilla Yapura Jose Luis
            </li>
            <li class="list-group-item" style="font-size: medium"><strong>Registro: </strong>
                211047864
            </li>
            <li class="list-group-item" style="font-size: medium"> <strong>Carrera: </strong>
                187-03 INGENIERIA INFORMATICA
            </li>
            <li class="list-group-item" style="font-size: medium"> <strong>Lugar: </strong>
                Santa Cruz
            </li>
            <li class="list-group-item" style="font-size: medium"> <strong>Modalidad: </strong>
                PRESENCIAL
            </li>
            <li class="list-group-item" style="font-size: medium"> <strong>Periodo: </strong>
                1/2023
            </li>
        </ul> 
</div>

<div class="container">

    <div class="row">
      <div class="col">
        
      </div>
      <div class="col-12">
        <table class="table table-bordered" style="background-color: rgb(255, 255, 220)">
            <thead>
                <tr>
                    <th class="table-primary" scope="col">Lunes</th>
                    <th class="table-secondary" scope="col">Martes</th>
                    <th class="table-success" scope="col">Miercoles</th>
                    <th class="table-danger" scope="col">Jueves</th>
                    <th class="table-warning" scope="col">Viernes</th>
                    <th class="table-info" scope="col">Sabado</th>
                    <th class="table-dark" scope="col">Domingo</th>
                </tr>
            </thead>
            <tbody>

                    {{-- fila 1 --}}
                    <tr>
                        
                        <td>
                            INF220 <br>
                            E1 <br>
                            18:00-20:00 <br>
                            236-45 <br>
                        </td>

                        <td>
                            
                        </td>

                        <td>
                            INF220 <br>
                            E1 <br>
                            18:00-20:00 <br>
                            236-45 <br> 
                        </td>

                        <td>
                            
                        </td>

                        <td>
                            INF220 <br>
                            E1 <br>
                            18:00-20:00 <br>
                            236-45 <br> 
                        </td>

                        <td>
                            
                        </td>

                        <td>
                           
                        </td>
                      
                    </tr>

                    {{-- fila 2 --}}
                    <tr>

                        <td>
                            
                        </td>

                        <td>
                            INF422 <br>
                            A1 <br>
                            15:00-17:00 <br>
                            236-10 <br>
                        </td>

                        <td>
                            
                        </td>

                        <td>
                            INF422 <br>
                            A1 <br>
                            15:00-17:00 <br>
                            236-10 <br>
                        </td>

                        <td>
                             
                        </td>

                        <td>
                            INF422 <br>
                            A1 <br>
                            15:00-17:00 <br>
                            236-10 <br> 
                        </td>

                        <td>
                           
                        </td>
                      
                    </tr>


                    {{-- fila 3 --}}
                    <tr>

                        <td>
                            INF513 <br>
                            SA <br>
                            14:00-15:00 <br>
                            236-17 <br>
                        </td>

                        <td>
                            
                        </td>

                        <td>
                            
                        </td>

                        <td>
                            
                        </td>

                        <td>
                            INF513 <br>
                            SA <br>
                            14:00-15:00 <br>
                            236-17 <br>   
                        </td>

                        <td>
                            
                        </td>

                        <td>
                           
                        </td>
                      
                    </tr>

                    
                    
            </tbody>
        </table>
      </div>
      <div class="col">
        
      </div>
    </div>
    
  </div>





@stop
