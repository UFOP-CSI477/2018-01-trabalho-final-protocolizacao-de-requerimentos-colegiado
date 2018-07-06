@extends('users.userhome')

@section('content')
    <center>
      <h3> Informe o tipo de requerimento que deseja fazer: </h3>
    <br>
    <select id="soli" type="dropdown-toggle" onchange="top.location.href = this.options[this.selectedIndex].value">
    <option value="0" selected disabled>Selecione</option>
    <option class="apports" value="{{ route('solicitacoes.show', 1) }}">Trancamento de Matrícula</option>
    <option class="apports" value="{{ route('solicitacoes.show', 2) }}">Aproveitamento de Disciplinas</option>
    <option class="apports" value="{{ route('solicitacoes.show', 3) }}">Quebra de Pré-Requisito</option>
    </select>
@endsection('content')
