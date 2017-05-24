@extends('layouts.master') <!-- nome da pasta, nome do arquivo -->

@section('title','Form Voluntarios') <!-- section do cabecalho -->

@section('container')
    <h1>Voluntarios</h1>
    <p><a href="{{ route('volunteer.create') }}">Criar Novo Voluntario</a></p>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($volunteers as $volunteer)
            <tr>
                <td><a href="{{ route('volunteer.show', $volunteer->id) }}">{{$volunteer->name}}</a></td>
                <td>{{$volunteer->email}}</td>
                <td>{{$volunteer->phone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection