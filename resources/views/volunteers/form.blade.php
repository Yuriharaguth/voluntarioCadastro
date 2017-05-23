@extends('layouts.master') <!-- nome da pasta, nome do arquivo -->

@section('title','Form Voluntarios') <!-- section do cabecalho -->

@section('container')
     <div>
        {!! Form::open(['route' => 'volunteer.send']) !!}
          
          <div class="form-group">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('phone', 'Telefone') !!}
            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
          </div>
      
           {!! Form::submit('Enviar', ['class' => 'btn btn-default']) !!}

        {!! Form::close() !!}
      </div>

@endsection

