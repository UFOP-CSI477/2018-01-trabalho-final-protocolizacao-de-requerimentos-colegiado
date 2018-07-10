@extends('users.adminhome')

@section('content')

<h1>Lista de Usuários</h1>

<table class="table">
  <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Tipo</th>
      <th>Cadastrado em</th>
      <th>Atualizado em</th>
    </tr>
  @foreach ($usuarios as $usuario)
  <tr>
    <td>{{$usuario->id}}</td>
    <td>{{$usuario->name}}</td>
    <td>@if ($usuario->type == 2)
            Técnico Administrativo
        @endif
        @if ($usuario->type == 1)
            Aluno
        @endif
    </td>
    <td>{{date('F j, Y', strtotime($usuario->created_at))}}</td>
    <td>{{date('F j, Y', strtotime($usuario->updated_at))}} as {{date('H: i', strtotime($usuario->updated_at))}}</td>
  </tr>
  @endforeach
</table>

@endsection('content')
