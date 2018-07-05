@extends('users.adminhome')

@section('content')

<br><center>
<h3>Solicitações em Aberto</h3>

<br><br>
<table class="table">
  <tr>
      <th>Nome</th>
      <th>Aluno</th>
      <th>Solicitada em</th>
      <th>Ações</th>
    </tr>
  @foreach ($solicitacoes as $s)
  <tr>
    <td><a href="{{ url('/download/info.pdf') }}" target="_blank">{{$s->name}}</a></td>
    <td>{{$s->solicitanteName($s)}}</td>
    <td>{{date('F j, Y', strtotime($s->created_at))}}</td>
    @php
    $id = $s->id
    @endphp
    <td><form action="{{route('solicitacoes.update', $id)}}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" value="Deferido" name="status" id="status">
        <input type="submit" class="btn btn-success btn-xs" value="Deferir"></a>
      </form>
      <form id="form2" action="{{route('solicitacoes.update', $id)}}" method="post">
          @csrf
          @method('PATCH')
          <input type="hidden" value="Indeferido" name="status" id="status">
          <input type="submit" class="btn btn-danger btn-xs" value="Indeferir"></a>
        </form>
    </td>
  </tr>
  @endforeach
</table>



@endsection('content')
