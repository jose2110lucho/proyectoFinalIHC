<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdicionTable extends Component
{
    public $materias = [];
    public $horarios = [];
    public $materiaCheck = [];
    public $materiasYaInscritas =[];

    public function onChangeCheck($sigla, $nombre, $grupo, $cupos_libres, $docente, $horarioInicio, $horarioFin, $aula, $dias)
    {
        //dd($sigla,$nombre,$grupo,$cupos_libres,$docente,$horarioInicio,$horarioFin,$aula,$dias,$this->materiaCheck); 
        //dd($this->materiaCheck);
        if ($this->materiaCheck[$sigla]) {
            $materiaHorario = [

                'sigla' => $sigla,
                'grupo' => $grupo,
                'horarioInicio' => $horarioInicio,
                'horarioFin' => $horarioFin,
                'aula' => $aula,
                'dias' => explode(",", $dias),
            ];

            $timestamp_inicio = strtotime($horarioInicio);
            $timestamp_fin = strtotime($horarioFin);

            $hora_actual = $timestamp_inicio;
            $inicioPeriodoTiempo = '';
            $finPeriodoTiempo = '';
            while ($hora_actual < $timestamp_fin) {
                $inicioPeriodoTiempo = date("H:i", $hora_actual);
                $hora_actual = strtotime("+30 minutes", $hora_actual);
                $finPeriodoTiempo = date("H:i", $hora_actual);
                $this->horarios[$inicioPeriodoTiempo . '-' . $finPeriodoTiempo][$sigla] = $materiaHorario;
            }
            
        } else {
            $timestamp_inicio = strtotime($horarioInicio);
            $timestamp_fin = strtotime($horarioFin);

            $hora_actual = $timestamp_inicio;
            $inicioPeriodoTiempo = '';
            $finPeriodoTiempo = '';
            while ($hora_actual < $timestamp_fin) {
                $inicioPeriodoTiempo = date("H:i", $hora_actual);
                $hora_actual = strtotime("+30 minutes", $hora_actual);
                $finPeriodoTiempo = date("H:i", $hora_actual);
                unset( $this->horarios[$inicioPeriodoTiempo . '-' . $finPeriodoTiempo][$sigla]);
                
            }
            //dd($this->horarios);
        }
    }

    public function mount()
    {
        $this->materias = [

            ['sigla' => 'INF310', 'nombre' => 'Estructura de datos II', 'grupo' => 'E2', 'cupos_libres' => '2', 'docente' => 'Ing. Jaime Castellon', 'horarioInicio' => '14:00', 'horarioFin' => '15:00', 'aula' => '236-10', 'dias' => [1, 3, 5]],
            ['sigla' => 'FIS200', 'nombre' => 'Fisica III', 'grupo' => 'B1', 'cupos_libres' => '30', 'docente' => 'Ing. Daniel Zeballos', 'horarioInicio' => '07:00', 'horarioFin' => '08:30', 'aula' => '236-24', 'dias' => [2, 4, 6]],
            ['sigla' => 'INF422', 'nombre' => 'Ingenieria del Software I', 'grupo' => 'A1', 'cupos_libres' => '40', 'docente' => 'Ing. Edgar Paredes', 'horarioInicio' => '15:00', 'horarioFin' => '17:00', 'aula' => '236-10', 'dias' => [2, 4, 6]],

            //añadidos por el pepe=============================================================================
            /* ['sigla' => 'INF512', 'nombre' => 'Ingenieria del Software II', 'grupo' => 'SB', 'cupos_libres' => '40', 'docente' => 'Ing. Rolando Martinez', 'horarioInicio' => '18:00', 'horarioFin' => '20:30', 'aula' => '236-25', 'dias' => [2, 4]], */
            ['sigla' => 'INF511', 'nombre' => 'Taller de Grado I', 'grupo' => 'SA', 'cupos_libres' => '10', 'docente' => 'Ing. Rolando Martinez', 'horarioInicio' => '20:30', 'horarioFin' => '23:00', 'aula' => '236-25', 'dias' => [2, 4]],
            //colision con INF310(ed2)------------------------------------------------------------------------------
            /* ['sigla' => 'INF513', 'nombre' => 'Tecnologia Web', 'grupo' => 'SA', 'cupos_libres' => '10', 'docente' => 'Ing. Evans Balcazar', 'horarioInicio' => '14:30', 'horarioFin' => '16:00', 'aula' => '236-17', 'dias' => [1, 5]], */
            //-------------------------------------------------------------------------------------------------
            /* ['sigla' => 'ELC103', 'nombre' => 'Topicos Avanz. de Prog.', 'grupo' => 'SA', 'cupos_libres' => '10', 'docente' => 'Ing. Miguel Peinado', 'horarioInicio' => '16:30', 'horarioFin' => '18:30', 'aula' => '236-12', 'dias' => [2, 4]], */
            //añadidos por el pepe=============================================================================

        ];

        $this->horarios = [
            //7:00 - 7:30

            '7:00-7:30' => [],
            //7:30 - 8:00
            '7:30-8:00' => [],
            //8:00 - 8:30
            '8:00-8:30' => [],
            //8:30 - 9:00
            '8:30-9:00' => [],
            //9:00 - 9:30
            '9:00-9:30' => [],
            //9:30 - 10:00
            '9:30-10:00' => [],
            //10:00 - 10:30
            '10:00-10:30' => [],
            //10:30 - 11:00
            '10:30-11:00' => [],
            //11:00 - 11:30
            '11:00-11:30' => [],
            //11:30 - 12:00
            '11:30-12:00' => [],
            //12:00 - 12:30
            '12:00-12:30' => [],
            //12:30 - 13:00
            '12:30-13:00' => [],
            //13:00 - 13:30
            '13:00-13:30' => [],
            //13:30 - 14:00
            '13:30-14:00' => [],
            //14:00 - 14:30
            '14:00-14:30' => [],
            //14:30 - 15:00
            '14:30-15:00' => [],
            //15:00 - 15:30
            '15:00-15:30' => [],
            //15:30 - 16:00
            '15:30-16:00' => [],
            //16:00 - 16:30
            '16:00-16:30' => [],
            //16:30 - 17:00
            '16:30-17:00' => [],
            //17:00 - 17:30
            '17:00-17:30' => [],
            //17:30 - 18:00
            '17:30-18:00' => [],
            //18:00 - 18:30
            '18:00-18:30' => [
                [
                'sigla' => 'INF220',
                'grupo' => 'E1',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:00',
                'aula' => '236-25',
                'dias' => [1, 3, 5],
                ], 

                /* [
                'sigla' => 'INF512',
                'grupo' => 'SB',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:30',
                'aula' => '236-45',
                'dias' => [2, 4],
                ], */
            ],
            //18:30 - 19:00
            '18:30-19:00' => [
                [
                'sigla' => 'INF220',
                'grupo' => 'E1',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:00',
                'aula' => '236-45',
                'dias' => [1, 3, 5],
                ],

               /*  [
                'sigla' => 'INF512',
                'grupo' => 'SB',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:30',
                'aula' => '236-45',
                'dias' => [2, 4],
                ], */
            ],
            //19:00 - 19:30
            '19:00-19:30' => [
                [
                'sigla' => 'INF220',
                'grupo' => 'E1',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:00',
                'aula' => '236-45',
                'dias' => [1, 3, 5],
                ],

                /* [
                'sigla' => 'INF512',
                'grupo' => 'SB',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:30',
                'aula' => '236-45',
                'dias' => [2, 4],
                ], */
            ],
            //19:30 - 20:00
            '19:30-20:00' => [
                [
                'sigla' => 'INF220',
                'grupo' => 'E1',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:00',
                'aula' => '236-45',
                'dias' => [1, 3, 5],
                ],

                /* [
                'sigla' => 'INF512',
                'grupo' => 'SB',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:30',
                'aula' => '236-45',
                'dias' => [2, 4],
                ], */
            ],
            //20:00 - 20:30
            '20:00-20:30' => [
               /*  [
                'sigla' => 'INF512',
                'grupo' => 'SB',
                'horarioInicio' => '18:00',
                'horarioFin' => '20:30',
                'aula' => '236-45',
                'dias' => [2, 4],
                ], */
            ],
            //20:30 - 21:00
            '20:30-21:00' => [],
            //21:00 - 21:30
            '21:00-21:30' => [],
            //21:30 - 22:00
            '21:30-22:00' => [],
            //22:00 - 22:30
            '22:00-22:30' => [],
            //22:30 - 23:00
            '22:30-23:00' => [],

        ];

        $this->materiasYaInscritas = [
            'INF220'
        ];

        //$this->materiaCheck = array_fill(0, count($this->materias), false); // Inicializa el array con n elementos, cada uno con valor false

        foreach ($this->materias as $materia) {
            $this->materiaCheck[$materia['sigla']] = false;   
        }

        //dd($this->materiaCheck);


    }

    public function render()
    {
        return view('livewire.adicion-table', ['materias' => $this->materias, 'horarios' => $this->horarios, 'materiasYaInscritas' => $this->materiasYaInscritas]);
    }
}
