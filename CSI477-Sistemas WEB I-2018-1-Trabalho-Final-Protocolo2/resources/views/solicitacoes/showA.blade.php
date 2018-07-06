@extends('users.userhome')

@section('content')
<center>
<h3>Aproveitamento de Disciplinas</h3>
<br>
<h6> A aproveitamento requer que você preencha um documento informando o Código da disciplina, e o tipo de aproveitamento (Eletiva, Facultativa)</h6>

<br><h6> Abaixo, encontra-se um arquivo que contém as informações sobre essa solicitação</h6>
<br>
<a href="{{ url('/download/info.pdf') }}" target="_blank"><input type="button" class="btn btn-secondary" value="Download do Arquivo"></a>
<br><br>
<form method="post" action="{{route('solicitacoes.store')}}">
	@csrf
	<input type="hidden" name="name" id="name" value="Aproveitamento de Disciplinas">
	<br><br>
	<input type="submit" class="btn btn-info" value="Solicitar esta">
</form>
<br><br>
	<a href="{{ route ('solicitar')}}"><input type="button" class="btn btn-warning" value="Voltar"></a>

@endsection
