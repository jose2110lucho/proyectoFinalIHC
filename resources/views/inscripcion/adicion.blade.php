@extends('adminlte::page')

@section('content_header')
    <div class="card-header" style="background-color: rgb(152, 255, 221)">
        <h4 style="text-align: center"><strong>ADICION</strong></h4>
    </div>
@stop

@section('content')
    @livewire('adicion-table')
@stop
