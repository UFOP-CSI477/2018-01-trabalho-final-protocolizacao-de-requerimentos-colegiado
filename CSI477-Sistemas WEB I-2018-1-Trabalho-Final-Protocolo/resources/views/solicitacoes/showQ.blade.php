@extends('users.userhome')

@section('content')
<center>
<h3>Quebra de Pré-Requisito</h3>
<br>
<h6> A quebra de pré-requisito deverá ser feita informando a Disciplina e uma justificativa </h6>
<br><h6> Abaixo, encontra-se um arquivo que contém as informações sobre essa solicitação</h6>
<br>
<a href="{{ url('/download/info.pdf') }}" target="_blank"><input type="button" class="btn btn-secondary" value="Download do Arquivo"></a>
<br><br>
<form method="post" action="{{route('solicitacoes.store')}}">
	@csrf
	<input type="hidden" name="name" id="name" value="Quebra de Pré-Requisito">
	<br><br>
	<input type="submit" class="btn btn-info" value="Solicitar esta">
</form>
<br><br>
	<a href="{{ route ('solicitar')}}"><input type="button" class="btn btn-warning" value="Voltar"></a>

@endsection
