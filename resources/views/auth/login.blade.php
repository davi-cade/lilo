@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/css/Login/login.css" />
@endsection

@section('title', 'Login')

@section('content')
<div id="container" class="container">
		<div class="im">
			<img src="img/login/onda.svg">
		</div>
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<form class="form sign-in" method="POST" action="{{ route('login') }}">
					@csrf
						<div class="a">
							<h2>Entrar</h2>
						</div>
						
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="email" id="email" name="email" placeholder="Seu email" required autofocus />
							@error('email') <span class="error">{{ $message }}</span> @enderror
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" id="password" placeholder="Senha" required autocomplete="current-password" />
							@error('password') <span class="error">{{ $message }}</span> @enderror
						</div>
						<div>
							<label for="remember_me">
								<input id="remember_me" type="checkbox" id="remember" name="remember">
								<span>Matenha-me conectado</span>
							</label>
						</div>
						<button>
							Entrar
						</button>
						<p>
							<b>
								<a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
							</b>
						</p>
						<p>
							<span>
								Não tem uma conta ainda?
							</span>
							<a href="{{url('/register')}}">Clique aqui</a>
							
							</b>
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
						<img src="img/login/001.svg" alt="welcome">
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
		</div>
		<!-- END CONTENT SECTION -->
	</div>

	<script src="/js/index.js"></script>
    @endsection
