@extends('layouts.app')
@section('menu')
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Menu <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('relatorio') }}">
            {{ __('Solicitações Feitas') }}
        </a>

        <a class="dropdown-item" href="{{ route('solicitar') }}">
            {{ __('Fazer Solicitação') }}
        </a>
@endsection('menu')
@section('content')
<br><center>
  <br>
	<h3> Minha Área </h3>
  <h6>Use o menu para selecionar uma opção.</h6>
  <h6>Lembre-se de que algumas solicitações podem demorar a serem avaliadas</h6>
  <h6>Não esqueça de baixar e imprimir o arquivo, e entregar à Seção de Ensino</h6>
@endsection('content')
