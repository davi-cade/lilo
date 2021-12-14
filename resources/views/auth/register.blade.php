@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/css/Register/register.css" />
@endsection

@section('title', 'Cadastro')

@section('content')
<div id="container" class="container">
		<div class="im">
			<!-- <img src="assets/a/onda.svg"> -->
		</div>
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">

				<form method="POST" action="{{ route('register') }}" class="form sign-in">
					@if ($errors->any())
						<div style="color:red;">
								@foreach ($errors->all() as $error)
									<p>{{ $error }}</p>
								@endforeach
						</div>
					@endif
					@csrf



					<div class="form sign-in">

                        <div class="max-width">
                            <div class="imageContainer">
                                <img  src="img/addprofilee.svg" alt="Selecione uma imagem" id="imgPhoto">
								<!-- <input type="file" id="flImage" name="fImage" accept="image/*"> -->
								<input type="file" name="avatar" id="avatar" accept="image/*">
                            </div>
                        </div>
						

                        <div class="a"><h2>Cadastro</h2></div>

						<!-- <input type="file" id="flImage" name="fImage" accept="image/*"> -->

						<!-- <input type="file" name="avatar" id="avatar"> -->


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

						<button>Cadastrar</button>
						<p>
						</p>
						<p>
							<span>
								Já tem uma conta?
							</span>
							<a href="{{url('/login')}}" class="e">Clique aqui!</a>
							
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
	<onda>
        <svg
          class="waves"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20962 10601"
        >
          <path
            class="wave-1"
            fill="#01a09c"
            d="M27489 8635c504 1667 831 3818-27 5680s-2901 3434-6193 3904-7834-161-12155-589c-4321-427-8421-649-10976-1537-2555-889-3565-2443-4071-4061-505-1619-505-3302 938-4835 1442-1533 4327-2916 6274-3122s2958 764 3877 1522 1746 1304 2738 1382 2148-312 2976-730 1327-864 2136-1014c810-151 1929-6 2757 206s1363 490 1978 775c614 284 1308 574 1947 535s1223-407 1935-875c712-469 1552-1037 2240-1266 688-228 1223-117 1832 530 608 646 1290 1828 1794 3495z"
          />
  
          <path
            class="wave-2"
            fill="#00cdc8"
            d="M25681 10400c-171 822-305 1990-646 3115-341 1124-889 2206-1856 2808-968 602-2355 724-4668 1064s-5550 898-8520 987-5672-290-9037-859c-3366-568-7394-1326-9403-2118-2008-791-1996-1616-1892-3305 103-1689 298-4242 1412-5731 1113-1488 3146-1912 4953-1627 1808 284 3390 1276 4522 1878s1814 814 2423 552 1145-998 2333-1388c1187-389 3025-432 4266 275 1240 707 1884 2164 2861 2407 976 244 2285-726 3493-1308 1209-581 2316-775 3731-567 1415 207 3137 815 4290 1221 1153 407 1737 612 1926 953 189 342-18 820-188 1643z"
          />
  
          <path
            class="wave-3"
            fill="#01e8e2"
            d="M30706 11822c-291 731-653 1801-1548 2972-895 1170-2321 2441-4988 3026-2667 586-6574 485-10469 541s-7778 268-10906-256-5501-1784-6906-3382c-1404-1598-1840-3533-1957-4910-118-1377 82-2195 1029-2854 946-659 2637-1158 4033-1002s2495 968 3440 1630 1737 1175 2905 1086c1169-89 2714-780 3810-1332 1095-552 1740-965 2665-820s2130 848 3110 1360c980 513 1734 837 2458 672s1416-819 2179-1050 1597-40 3058 269c1461 310 3550 739 5069 1177 1519 437 2469 883 2998 1112 529 228 639 240 584 440-55 201-274 591-564 1321z"
          />
        </svg>
      </onda>
	<script src="js/index.js"></script>

    @endsection