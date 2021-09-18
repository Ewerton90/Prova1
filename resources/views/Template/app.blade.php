<!DOCTYPE html>
<html>
	<head>
		<title>CRUD - @yield("nome_tela")</title>
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/fa.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
		<script src="{{asset('js/jquery.js')}}"></script>
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<script src="js/jquery.js"></script>
		<script src="{{asset('js/jquery.mask.js')}}"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-light navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="/"><b>Home</b></a></li>
				<li class="nav-item"><a class="nav-link" href="/animal">Animal</a></li>
				<li class="nav-item"><a class="nav-link" href="/especie">Especie</a></li>
			</ul>
		</nav>
		@if (Session::has("salvar"))
			<div class="alert alert-success">
				{{Session::get("salvar")}}
			</div>
		@endif
		@if (Session::has("excluir"))
			<div class="alert alert-danger">
				{{Session::get("excluir")}}
			</div>
		@endif
		@if(!request()->is("/"))
		<div class="container">
			<h1>Cadastro - @yield("nome_tela")</h1>
				<div class="cadastro">
					@yield("cadastro")
				</div>
			<h1>Listagem - @yield("nome_tela")</h1>
				<div class="listagem">
					@yield("listagem")
				</div>
		</div>
		@else
			<div class="container" style="text-align: center;">
				<br/>
				<br/>
				<br/>
				<h1>Petshop</h1>
			</div>
		@endif
	</body>
	<script>
		$(document).ready(function (){
			$("#cpf").mask("000.000.000-00", {placeholder: "___.___.___-__"});
		});
	</script>
</html>