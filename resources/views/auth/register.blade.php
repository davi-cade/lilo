@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/css/Register/register.css" />
@endsection

@section('title', 'Cadastro')

@section('content')
<div id="container" class="container">
		<div class="im">
			<img src="img/login/onda.svg">
		</div>
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<form class="form sign-in" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
						@csrf
                        <div class="a">
							<h2>Cadastro</h2>
						</div>

						<div class="imageContainer">
							<label for="avatar">Por favor, faça o upload da sua imagem</label>
							<input type="file" name="avatar" id="avatar">
						</div>

						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="name" id="name"  placeholder="Nome" required />
						</div>

						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" id="surname" name="surname" placeholder="Sobrenome" required />
						</div>

						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input id="birth_date" name="birth_date" type="date" placeholder="Data de Nascimento" required />
						</div>

						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" id="email" name="email" placeholder="Email" required />
						</div>

						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" id="password"  placeholder="Senha" required autocomplete="new-password" />
						</div>

						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required />
						</div>
						<button>
							Cadastrar
						</button>
						<p>
						</p>
						<p>
							<span>
								Já tem uma conta?
							</span>
							<a  href="{{ route('login') }}">Clique aqui</a>
							
							</b>
						</p>
					</form>
				</div>
				
			</div>
			<!-- END SIGN UP -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			
			<!-- SIGN IN CONTENT -->
			<div class="im">
				<!-- <img src="assets/a/onda.svg"> -->
			</div>
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<div class="logo">
						<img src="img/login/001.svg" alt="welcome">
					</div>
					<h2>
						O primeiro educador de surdos chamado Pedro Ponce de Léon, ensinava
						seus alunos a falar, ler e escrever para que eles pudessem garantir
						suas heranças.
					</h2>
				</div>
				<div class="img sign-in">
					<img src="/img/login/bg.svg" alt="welcome">
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
	<script src="js/index.js"></script>

    @endsection