@extends('layouts.master') <!-- nome da pasta, nome do arquivo -->

@section('title','Form Voluntarios') <!-- section do cabecalho -->

@section('container')
    <h1>Voluntarios</h1>
    <p>{{$volunteer->name}}</p> 
    <p>{{$volunteer->email}}</p>
    <p>{{$volunteer->phone}}</p>

    <a href="{{ route('volunteer.index') }}">Voltar</a>
@endsection