@extends('layouts.main')

@section('head')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<!--=============== CSS ===============-->
<link rel="stylesheet" href="\css\welcome\welcome.css">

@endsection


@section('title', 'Lilo')

@section('content')
 <!--=============== HEADER ===============-->
 <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Bem-vindo</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Início</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">Sobre</a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">Serviços</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contato</a>
                        </li>

                        <!-- <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                    </ul> -->
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

                <!-- <a href="{{url('/login')}}" class="button button__header">Login</a> -->
            </nav>

        </header>

        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                   
                        
                        
                       
                         <img src="/img/home-ilustration.svg" svg class="svg__img svg__color home__img" alt="...">
	

                    <div class="home__data">
                        <h1 class="home__title">Aprenda língua de<br>sinais brincando!</h1>
                        <p class="home__description">Objetivo de ensinar o vocabulário básico de libras para crianças e pré-adolescentes que não são portadores de alguma necessidade física quanto à surdez.</p>

                        <a href="{{url('/register')}}" class="button">COMEÇAR</a>
                        <a href="{{url('/login')}}" class="button">LOGIN</a>
                        
                        <!-- <a href="#" class="button">LOGIN</a> -->

                    </div>   
                </div>
            </section>

            <!--=============== ABOUT ===============-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center">Descubra um pouco mais<br> sobre o Lilo</h2>
                        <p class="about__description">Somos uma dupla de estudantes do curso Técnico em Informática do IFPE campus Garanhuns, que se dedicou a criar um website gratuito que ajuda a alfabetizar qualquer criança da sua própria casa.

                        </p>
                    </div>

                   
                        <img src="/img/home-ilustration.svg" svg class="svg__img svg__color about__img" alt="...">
                </div>
            </section>

            <!--=============== SECURITY ===============-->
            <section class="security section container">
                <div class="security__container grid">
                    <div class="security__data">
                        <h2 class="section__title-center">Seu apredizado é <br> importante!</h2>
                        <p class="security__description">Aproveite e mergulhe no mundo de libras com todos os 10 modulos gartuitos.
                        </p>
                    </div>

                  
                        <img src="/img/home-ilustration.svg" svg class="svg__img svg__color" alt="...">
                </div>
            </section>

            <!--=============== SERVICES ===============-->
            <section class="services section container" id="services">
                <h2 class="section__title">Lilo<br>Oferece:</h2>
                <div class="services__container grid">
                    <div class="services__data">
                        <h3 class="services__subtitle">Mudulos Gratuitos</h3>
                       
                            <img src="/img/home-ilustration.svg" svg class="svg__color services__img" alt="...">

                        <p class="services__description">Aproveite e mergulhe no mundo de libras com os 10 modulos gartuitos.</p>
                        <div>
                            <a href="#" class="button button-link">Learn More</a>
                        </div>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Premium</h3>
                       
                            <img src="/img/home-ilustration.svg" svg class="svg__color services__img" alt="...">

                        <p class="services__description">Quer ir além do vocabulario basico de Libras? O Lilo te oferece isso e com um custo acessivel!</p>
                        <div>
                            <a href="#" class="button button-link">Learn More</a>
                        </div>
                    </div>

                    <div class="services__data">
                        <h3 class="services__subtitle">Grupos</h3>
                        
                            <img src="/img/home-ilustration.svg" svg class="svg__color services__img" alt="...">

                        <p class="services__description">Crie ou entre em grupos e socialize com os outros players!</p>
                        <div>
                            <a href="#" class="button button-link">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--=============== APP ===============-->
            <section class="app section container">
                <div class="app__container grid">
                    <div class="app__data">
                        <h2 class="section__title-center">Em breve... <br> Estamos a um passo para o futuro!</h2>
                        <p class="app__description">Temos planos para porta o Lilo para um app mobile em 2022</p>
                        <div class="app__buttons">
                            <a href="#" class="button button-flex">
                                <i class='bx bxl-apple button__icon'></i> App Store
                            </a>
                            <a href="#" class="button button-flex">
                                <i class='bx bxl-play-store button__icon' ></i> Google Play
                            </a>
                        </div>
                    </div>

                  
                        <img src="/img/app-ilustration.svg" svg class="svg__img svg__color app__img" alt="...">
                </div>
            </section>

            <!--=============== CONTACT US ===============-->
            <section class="contact section container" id="contact">
                <div class="contact__container grid">
                    <div class="contact__content">
                        <h2 class="section__title-center">Contate-nos<br> Aqui</h2>
                        <p class="contact__description">Você pode entrar em contato conosco aqui, pode escrever para nós,
                            ligue-nos ou visite nosso centro de serviços, teremos o maior prazer em atendê-lo.</p>
                    </div>

                    <ul class="contact__content grid">
                        <li class="contact__address">Telefone: <span class="contact__information">(87)99491076</span></li>
                        <li class="contact__address">Email:  <span class="contact__information">equipelilo.suporte@gmail.com</span></li>
                        <!-- <li class="contact__address">Location: <span class="contact__information">Lima - Peru</span></li> -->
                    </ul>

                    <div class="contact__content">
                        <a href="#" class="button">Contato</a>
                    </div>
                </div>
            </section>
        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Bem vindo</a>
                    <p class="footer__description">A definir utilidade <br> </p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Outros serviços</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">A definir utilidade </a></li>
                        <li><a href="#" class="footer__link">A definir utilidade</a></li>
                        <li><a href="#" class="footer__link">A definir utilidade</a></li>
                        <li><a href="#" class="footer__link">A definir utilidade</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Nosso projeto</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">A definir utilidade</a></li>
                        <li><a href="#" class="footer__link">A definir utilidade</a></li>
                        <li><a href="#" class="footer__link">A definir utilidade</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Comunidade</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">Suporte</a></li>
                        <li><a href="#" class="footer__link">Duvidas</a></li>
                        <li><a href="#" class="footer__link">Ajuda ao player</a></li>
                    </ul>
                </div>

                <div class="footer__social">
                    <a href="#" class="footer__social-link"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social-link"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="footer__social-link"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; Lilo. Todos os direitos reservados</p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== MAIN JS ===============-->
        <script src="js/welcome.js"></script>
        @endsection