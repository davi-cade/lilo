@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/css/Login/login.css" />
@endsection

@section('title', 'Login')

@section('content')
<div id="container" class="container">
		<div class="im">
			<img src="assets/a/onda.svg">
		</div>
		
		
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<div class="a">
							<h2>Entrar</h2>
						</div>
						
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Nome de usuario">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Senha">
						</div>
						<button>
							Entrar
						</button>
						<p>
							<b>
								Esqueceu sua senha?
							</b>
						</p>
						<p>
							<span>
								Não tem uma conta ainda?
							</span>
							<a href="https://www.google.com">Clique aqui</a>
							
							</b>
						</p>
					</div>
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
						<img src="assets/001.svg" alt="welcome">
					</div>
					<h2>
						Em média 5% da população brasileira, que equivale a 9,6 milhões de pessoas, sofrem de deficiência auditiva.
					</h2>
				</div>
				<div class="img sign-in">
					<img src="assets/bg.svg" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>

	<script src="/js/index.js"></script>
    @endsection
