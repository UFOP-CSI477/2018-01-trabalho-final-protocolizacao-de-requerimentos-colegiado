@extends('users.userhome')

@section('content')
<center>
<h3>Quebra de Pré-Requisito</h3>
<br>
<h6> O trancamento poderá ser feito até duas vezes no período de cinco anos </h6>
<br><h6> Abaixo, encontra-se um arquivo que contém as informações sobre essa solicitação</h6>
<br>
<a href="{{ url('/download/info.pdf') }}" target="_blank"><input type="button" class="btn btn-secondary" value="Download do Arquivo"></a>
<br><br><br>
<form method="post" action="{{route('enviarArq')}}">
	@csrf
	@method('PATCH')
	<input type="file" name="file" id="file">
	<br><br>
	<input type="submit" class="btn btn-info" value="Enviar">
</form>

@endsection
