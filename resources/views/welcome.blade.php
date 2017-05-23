@extends('layouts.master') <!-- nome da pasta, nome do arquivo -->

@section('title','Pagina Inicial') <!-- section do cabecalho -->

@section('container')
    <div class="starter-template">
        <h1>Curso de Laravel do TreinaWeb</h1>
        <p class="lead">Curso baseado na versão 5.1 do Laravel. Projeto Voluntários.</p>
    </div>
@endsection

@section('scripts')

  @parent <!-- ASSIM USAMOS O QUE JA FOI DECLARA E ACRESCENTAMOS ALGO MAIS -->

@endsection