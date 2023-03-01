<div>
    <h5 style="text-align: center">Materias Ofertadas</h5>
    <div class="card" style="background-color: rgb(228, 228, 228); padding-top:5px;">
        <div class="card-body">
            <div class="table-responsive" style="height: 250px;">

                <table class="table caption-top" style="background-color: rgb(201, 201, 201);">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">sigla</th>
                            <th scope="col">nombre</th>
                            <th scope="col"></th>
                            <th scope="col">grupo</th>
                            <th scope="col">cupos libres</th>
                            <th scope="col">docente</th>
                            <th scope="col">horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materias as $index => $materia)
                        <tr>
                            <td style="width: 25%;">{{ $materia['sigla'] }}</td>
                            <td>{{ $materia['nombre'] }}</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"
                                        style="height: 17px; width: 17px;"
                                        wire:change="onChangeCheck('{{ $materia['sigla'] }}','{{ $materia['nombre'] }}','{{ $materia['grupo'] }}','{{ $materia['cupos_libres'] }}','{{ $materia['docente'] }}','{{ $materia['horarioInicio'] }}','{{ $materia['horarioFin'] }}','{{ $materia['aula'] }}','{{ implode(',', $materia['dias']) }}')"
                                        wire:model="materiaCheck.{{ $materia['sigla'] }}">

                                </div>
                            </td>
                            <td>{{ $materia['grupo'] }}</td>
                            <td>{{ $materia['cupos_libres'] }}</td>
                            <td>{{ $materia['docente'] }}</td>
                            <td> 
                                <a class="btn btn-link">
                                    <i class="fas fa-solid fa-calendar-week fa-lg"
                                    onclick="verHorarioDocente('{{ $materia['nombre'] }}','{{ $materia['horarioInicio'] }}','{{ $materia['horarioFin'] }}','{{ $materia['aula'] }}','{{ implode(',', $materia['dias']) }}')">
                                    </i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <h5 style="text-align: center">Boleta Horario</h5>
    <div class="row">
        <div class="col-sm-8">
           {{--  @php
                if($contador==2){
                    dd($horarios);
                }
            @endphp --}}
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
                    @foreach ($horarios as $horario)
                    <tr>

                        @foreach ($horario as $elemento)
                        <td>
                            @if (in_array(1, $elemento['dias']))
                            {{ $elemento['sigla'] }}
                            <br>
                            {{ $elemento['grupo'] }}
                            <br>
                            {{ $elemento['horarioInicio'] . '-' . $elemento['horarioFin'] }}
                            <br>
                            {{ $elemento['aula'] }}
                            @endif
                        </td>
                        <td>
                            @if (in_array(2, $elemento['dias']))
                            {{ $elemento['sigla'] }}
                            <br>
                            {{ $elemento['grupo'] }}
                            <br>
                            {{ $elemento['horarioInicio'] . '-' . $elemento['horarioFin'] }}
                            <br>
                            {{ $elemento['aula'] }}
                            @endif
                        </td>
                        <td>
                            @if (in_array(3, $elemento['dias']))
                            {{ $elemento['sigla'] }}
                            <br>
                            {{ $elemento['grupo'] }}
                            <br>
                            {{ $elemento['horarioInicio'] . '-' . $elemento['horarioFin'] }}
                            <br>
                            {{ $elemento['aula'] }}
                            @endif
                        </td>
                        <td>
                            @if (in_array(4, $elemento['dias']))
                            {{ $elemento['sigla'] }}
                            <br>
                            {{ $elemento['grupo'] }}
                            <br>
                            {{ $elemento['horarioInicio'] . '-' . $elemento['horarioFin'] }}
                            <br>
                            {{ $elemento['aula'] }}
                            @endif
                        </td>
                        <td>
                            @if (in_array(5, $elemento['dias']))
                            {{ $elemento['sigla'] }}
                            <br>
                            {{ $elemento['grupo'] }}
                            <br>
                            {{ $elemento['horarioInicio'] . '-' . $elemento['horarioFin'] }}
                            <br>
                            {{ $elemento['aula'] }}
                            @endif
                        </td>
                        <td>
                            @if (in_array(6, $elemento['dias']))
                            {{ $elemento['sigla'] }}
                            <br>
                            {{ $elemento['grupo'] }}
                            <br>
                            {{ $elemento['horarioInicio'] . '-' . $elemento['horarioFin'] }}
                            <br>
                            {{ $elemento['aula'] }}
                            @endif
                        </td>
                        <td>
                            @if (in_array(7, $elemento['dias']))
                            {{ $elemento['sigla'] }}
                            <br>
                            {{ $elemento['grupo'] }}
                            <br>
                            {{ $elemento['horarioInicio'] . '-' . $elemento['horarioFin'] }}
                            <br>
                            {{ $elemento['aula'] }}
                            @endif
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
            <div class="card" style="background-color: rgb(236, 249, 200)">
                <div class="card-header">
                    <strong>Materias que se pueden:</strong>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-dark" data-container="body"
                                        data-toggle="popover" data-placement="left"
                                        data-content="Las materias que se pueden INSCRIBIR de forma regular aparecen en color NEGRO, en la lista de Materias Ofertadas">
                                    </button>
                                </td>
                                <td>inscribir</td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-primary" data-container="body"
                                        data-toggle="popover" data-placement="left"
                                        data-content="Las materias que se pueden LEVANTAR de forma regular aparecen en color AZUL, en la lista de Materias Ofertadas">
                                    </button>
                                </td>
                                <td>levantar</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="center" style="text-align: center; margin-top:20px;">
        <button  class="btn btn-success" onclick="confirmarHorario()">
            Grabar materias
        </button>
    </div>



</div>

@section('js')
<script src="https://unpkg.com/@popperjs/core@2"></script>

<script>
    $(function() {
         $('[data-toggle="popover"]').popover()
       })
</script>

<script>


    function verHorarioDocente(nombre, horarioInicio, horarioFin, aula, dias) {
          let tableHTML = 
          `<table class="table table-bordered" style="background-color:beige">
                  <thead>
                    <tr>
                      <th scope="col">L</th>
                      <th scope="col">M</th>
                      <th scope="col">M</th>
                      <th scope="col">J</th>
                      <th scope="col">V</th>
                      <th scope="col">S</th>
                      <th scope="col">D</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>
                          ${dias.includes(1)?'X':''}
                        </td>
                        <td>
                            ${dias.includes(2)?'X':''}
                        </td>
                        <td>
                            ${dias.includes(3)?'X':''}
                        </td>
                        <td>
                            ${dias.includes(4)?'X':''}
                        </td>
                        <td>
                            ${dias.includes(5)?'X':''}
                        </td>
                        <td>
                            ${dias.includes(6)?'X':''}
                        </td>
                        <td>
                            ${dias.includes(7)?'X':''}
                        </td>
                    </tr>
                  </tbody>
          </table>
          
          Nombre: ${nombre} <br>
          Horario: ${horarioInicio} - ${horarioFin} <br>
          Aula: ${aula}
          
          `;
            Swal.fire({
                //title: '',
                //icon: 'info',
                html: tableHTML,

                /* showCloseButton: true,
                showCancelButton: true, */
                focusConfirm: false
                /* confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                //confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: 'Thumbs down' */
            })

        }
    
    function confirmarHorario(){
        let url = "{{ route('boleta') }}"
        Swal.fire({
        title: 'Esta seguro que desea confirmar su seleccion?',
        /* text: "No podrás revertir esto!", */
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, confirmar!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
             
            window.location.href = url; 
        }
        })
    }

</script>


@stop