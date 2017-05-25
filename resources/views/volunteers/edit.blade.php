@extends('layouts.master') <!-- nome da pasta, nome do arquivo -->

@section('title','Form Voluntarios') <!-- section do cabecalho -->

@section('container')
     <div>
        {!! Form::model($volunteer, ['route' => ['volunteer.update', $volunteer->id], 'method' => 'PUT' ]) !!}
          
          @include('volunteers.form')

        {!! Form::close() !!}
      </div>

@endsection

