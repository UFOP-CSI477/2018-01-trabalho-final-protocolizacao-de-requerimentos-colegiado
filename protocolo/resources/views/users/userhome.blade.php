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
	<h3> Minha Área </h3>
@endsection('content')
