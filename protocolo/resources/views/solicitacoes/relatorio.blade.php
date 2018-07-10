@extends('users.userhome')
@section('content')
<br><center>
<h3>Suas solicitações</h3>

<div style="overflow-x:auto;">
<table class="table">
    <tr>
        <th>Nome</th>
        <th>Data</th>
        <th>Status</th>
      </tr>
  @foreach ($solicitacoes as $s)
  @if (is_null($s->status))
    <tr class="blue">
  @endif
  @if ($s->status == "Indeferido")
    <tr class="red">
  @endif
  @if ($s->status == "Deferido")
    <tr class="green">
  @endif
    <td>{{$s->name}}</td>
    <td>{{date('F j, Y', strtotime($s->created_at))}}</td>
    <td>@if (is_null($s->status))
          Aguardando
        @endif
        @if (!is_null($s->status))
          {{$s->status}}
        @endif
         </td>
  </tr>
  @endforeach
</table>
</div>
@endsection('content')
