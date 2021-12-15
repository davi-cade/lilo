@extends('layouts.main')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="\css\grups\grup01.css">
<link rel="stylesheet" href="\css\grups\grup02.css">


@endsection

@section('title', 'Seus Grupos')

@section('content')
<div class="container">
<header>
            <div class="nav">

                <div class="row one">

                    <div class="col-1 col-sm-2 col-md-1 col-lg-1 col-xl-2">
                        <img class="logo" src="/img/lilo.svg" alt="logo">
                    </div>

                    <div class="col-1 col-sm- col-md-1 col-lg- col-xl-">
                      
                    </div>

                    <div class="col-1">
                        <div class="objeto_trophy">
                       
                        </div>
                    </div>

                    <div class="col-1">
                    <h1 class="titu">Grupos
                    </div>

                    <div class="col-1">
                        <div class="objeto_coin">
                        
                        </div>
                    </div>

                    <div class="col-1">
                    
                    </div>

                    <div class="col-1 col-lg-1 col-xl-3">
                        <div class="objeto_ruby">
                        <button onclick="window.location.href ='{{url('/group/create')}}' "class="btn1">Criar Grupo</button>
                        <!-- <a href="{{url('/group/create')}}">Criar grupo</a> -->
                        </div>
                    </div>

                    <div class="col-1 col-sm-2 col-md-3 col-lg-4 col-xl-1">
                        <div class="menu_profile">
                            <img class="menu_avatar--frame" src="/img/frame.svg" alt="Avatar Frame">   
                            <img class="menu_avatar" src="{{asset(Auth::user()->directory->url_avatar)}}" alt="Avatar Picture">
                          </div>
                    </div>

                    <div class="col-1  "> 
                        <div class="mobile-menu">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                            </div>
                        <ul class="nav-list">
                            <li><a href="{{url('/profile')}}">Perfil</a></li>
                            <li><a href="{{url('/group')}}">Grupos</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        </ul>
                    </div>

                    
               
            </div>
            </div>
        </header>
                    <div class="box">
                        <div class="row tow">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
              <div class="box_one">
                <div class="titulo">
                    <h1 class="elemento">Seus Grupos</h1>
                  </div>
                  <h2>Seus grupos</h2>
    @foreach($myGroups as $key)
        <h2>{{$key->getName()}}</h2>
        <p>{{$key->getDescription()}}</p>
        <div>
            <p>{{$key->getCreationDate()}}</p>
            <a href="/group/{{$key->getSlug()}}">ver</a>
        </div>
    @endforeach

              </div>
              </div>

              <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="box_two">
                    <div class="titulo">
                        <h1 class="elemento">Grupos em que você está</h1>
                      </div>
                      <h2>Grupos que você está participando</h2>
    @foreach($groups as $key)
        <h2>{{$key->group->getName()}}</h2>
        <p>{{$key->group->getDescription()}}</p>
        <div>
            <p>{{$key->group->getCreationDate()}}</p>
            <a href="/group/{{$key->group->getSlug()}}">ver</a>
        </div>
    @endforeach
                  </div>
                </div>
                
                </div>
          </div>
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

    <script src="/js/mobile-navbar.js"></script>





    </div>
    <a href="{{url('/group/create')}}">Cria um grupo</a>
    <h2>Seus grupos</h2>
    @foreach($myGroups as $key)
        <h2>{{$key->getName()}}</h2>
        <p>{{$key->getDescription()}}</p>
        <div>
            <p>{{$key->getCreationDate()}}</p>
            <a href="/group/{{$key->getSlug()}}">ver</a>
        </div>
    @endforeach

    <h2>Grupos que você está participando</h2>
    @foreach($groups as $key)
        <h2>{{$key->group->getName()}}</h2>
        <p>{{$key->group->getDescription()}}</p>
        <div>
            <p>{{$key->group->getCreationDate()}}</p>
            <a href="/group/{{$key->group->getSlug()}}">ver</a>
        </div>
    @endforeach
@endsection