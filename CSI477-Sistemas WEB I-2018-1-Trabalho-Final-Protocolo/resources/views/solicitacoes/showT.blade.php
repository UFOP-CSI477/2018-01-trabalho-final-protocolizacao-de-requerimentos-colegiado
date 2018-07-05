@extends('users.userhome')

@section('content')
<center>
<h3>Trancamento de Matrícula</h3>
<br>
<h6> O trancamento poderá ser feito até duas vezes no período de cinco anos </h6>
<br><h6> Abaixo, encontra-se um arquivo que contém as informações sobre essa solicitação</h6>
<br>
<a href="{{ url('/download/info.pdf') }}" target="_blank"><input type="button" class="btn btn-secondary" value="Download do Arquivo"></a>
<br><br>
<form method="post" action="{{route('solicitacoes.store')}}">
	@csrf
	<input type="hidden" name="name" id="name" value="Trancamento de Matrícula">
	<br><br>
	<input type="submit" class="btn btn-info" value="Solicitar esta">
</form>
<br><br>
	<a href="{{ route ('solicitar')}}"><input type="button" class="btn btn-warning" value="Voltar"></a>

@endsection
