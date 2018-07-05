@extends('layouts.app')
@section('menu')
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           Menu @if ($notificacao > 0)
              <span class="badge red">{{ $notificacao }}
              @endif
              </span><span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('adminlistar') }}">
                {{ __('Lista Usuários') }}
            </a>

            <a class="dropdown-item" href="{{ route('avaliarsolicitacoes') }}">
                {{ __('Avaliação de Procedimentos') }}
                @if ($notificacao > 0)
                   <span class="badge red">{{ $notificacao }}
                   @endif </div>
            </a>

@endsection('menu')
