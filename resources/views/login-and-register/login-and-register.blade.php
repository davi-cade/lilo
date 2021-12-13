@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/css/Login/index.css" />
@endsection

@section('title', 'Login')

@section('content')

<div id="container" class="container">
	<div class="im"><img src="img/onda.svg"></div>
	<!-- FORM SECTION -->
	<div class="row">	
		<!-- SIGN UP -->
		<div class="col align-items-center flex-col sign-up">
			<div class="form-wrapper align-items-center">
			
				<form method="POST" action="{{ route('register') }}" class="form sign-up">
					@if ($errors->any())
						<div style="color:red;">
								@foreach ($errors->all() as $error)
									<p>{{ $error }}</p>
								@endforeach
						</div>
					@endif
					@csrf
					<div class="b"><h2>Cadastro</h2></div>

					<div class="input-group">
						<i class='bx bxs-user'></i>
						<input id="name" type="text" placeholder="Nome Completo">
					</div>

					<div class="input-group">
						<i class='bx bx-mail-send'></i>
						<input id="email" type="email" placeholder="Email">
					</div>

					<div class="input-group">
						<i class='bx bxs-lock-alt'></i>
						<input id="" type="password" placeholder="Senha">
					</div>

					<div class="input-group">
						<i class='bx bxs-lock-alt'></i>
						<input id="" type="password" placeholder="Confirme a sua senha">
					</div>

						<button>Cadastrar</button>
					<p>
						<span>Já tem uma conta?</span>
						<b onclick="toggle()" class="pointer">Clique aqui</b>
					</p>
				</form>
			</div>
		</div>
		<!-- END SIGN UP -->

		<!-- SIGN IN -->
		<div class="col align-items-center flex-col sign-in">
			
			<div class="form-wrapper align-items-center">
					
				<form action="{{ route('login') }}" method="POST" class="form sign-in">
					@if ($errors->any())
						<div style="color:red;">
								@foreach ($errors->all() as $error)
									<p>{{ $error }}</p>
								@endforeach
						</div>
					@endif
					@csrf
					<div class="a"><h2>Entrar</h2></div>

					<div class="input-group">
						<i class='bx bxs-user'></i>
						<input id="email" type="email" name="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
					</div>

					<div class="input-group">
						<i class='bx bxs-lock-alt'></i>
						<input id="password" type="password" name="password" placeholder="Senha" required autocomplete="current-password">
					</div>
					
					<button>Entrar</button>

					<p><a href="{{ route('password.request') }}">Esqueceu sua senha?</a></p>
					
					<p>
						<span>Não tem uma conta ainda?</span>
						<b onclick="toggle()" class="pointer">Clique aqui</b>
					</p>
				</form>
			</div>
		</div>
			<!-- END SIGN IN -->
	</div>
			<!-- END FORM SECTION -->
			<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="im">
			</div>
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<div class="logo">
						<img src="img/001.svg" alt="welcome">
					</div>
					<h2>
						Em média 5% da população brasileira, que equivale a 9,6 milhões de pessoas, sofrem de deficiência auditiva.
					</h2>
				</div>
				<div class="img sign-in">
				<img src="img/login/bg.svg" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">	
				<div class="img sign-up">
					<img src="img/undraw_creative_team_r90h.svg" alt="welcome">
				</div>
				<div class="text sign-up">
					<h2>
						Um pouco de história!
					</h2>
					<p>
						O primeiro educador de surdos chamado Pedro Ponce de Léon, ensinava
						seus alunos a falar, ler e escrever para que eles pudessem garantir
						suas heranças e, com isso, mostrou que os surdos eram capazes de aprender.
					</p>
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>

	<script src="\js\index.js"></script>

@endsection