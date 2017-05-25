@extends('layouts.master') <!-- nome da pasta, nome do arquivo -->

@section('title','Form Voluntarios') <!-- section do cabecalho -->

@section('container')
     <div>
        {!! Form::open(['route' => 'volunteer.store']) !!}
          
          @include('volunteers.form')

        {!! Form::close() !!}
      </div>

@endsection

