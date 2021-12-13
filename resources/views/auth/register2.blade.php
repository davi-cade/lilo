@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/css/Register/register.css" />
@endsection

@section('title', 'Register')

@section('content')
<div id="container" class="container">
		<div class="im">
			<img src="assets/a/onda.svg">
		</div>
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">

                        <div class="max-width">
                            <div class="imageContainer">
                                <img src="img/addprofilee.svg" alt="Selecione uma imagem" id="imgPhoto">
                            </div>
                        </div>

                        <div class="a">
							<h2>Cadastro</h2>
						</div>

                        <input type="file" id="flImage" name="fImage" accept="image/*">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="Username">
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Password">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" placeholder="Confirm password">
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
							<a href="https://www.google.com">Clique aqui</a>
							
							</b>
						</p>
					</div>
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
						<img src="assets/001.svg" alt="welcome">
					</div>
					<h2>
						O primeiro educador de surdos chamado Pedro Ponce de Léon, ensinava
						seus alunos a falar, ler e escrever para que eles pudessem garantir
						suas heranças.
					</h2>
				</div>
				<div class="img sign-in">
					<img src="assets/bg.svg" alt="welcome">
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