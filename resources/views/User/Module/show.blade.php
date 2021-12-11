@extends('layouts.main')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Modulo/index.css" />
@endsection


@section('title', 'Home')

@section('content')
<div class="container">
      <div class="row">
        <a href="http://127.0.0.1:5501/painel.html">
            <svg xmlns="https://www.google.com/webhp?hl=pt-PT&sa=X&ved=0ahUKEwj1x_D_wJ30AhVNqpUCHdXzAr8QPAgI" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
        </a>
    </div>
       
        <div class="card">
            <img src="/img/lion 1.svg" class="icon" alt="...">
            <h5 class="elemento">Animais</h5>
          </div>

          <div class="row one gx-2">

            <div class="col-lg-3">
               
            </div>


              <div class="col-4 col-sm- col-md-4 col-lg-2">
                  <div class="card-1">
                      <div class="row">
                       <div class="level-1">
                           <div class="row">
                            <h5 class="numero">1</h5>
                           </div>

                           <div class="row">
                            <h5 class="name_level">NIVEL</h5>
                           </div>
                       </div>
                      </div>

                      <div class="row">
                        <button onclick="window.location.href =' http://127.0.0.1:5500/A%20M%C3%A9rito%20de%20Testes/Caadastro%20Lilo.html'"class="btn1">PLAY</button>
                    
                    </div>

                  </div>
              </div>

              <div class="col-4 col-md-4 col-lg-2">
                <div class="card-2">
                    <div class="row">
                        <div class="level-2">
                            <div class="row">
                             <h5 class="numero">2</h5>
                            </div>
 
                            <div class="row">
                             <h5 class="name_level">NIVEL</h5>
                            </div>
                        </div>
                       </div>
 
                       <div class="row">
                         <button onclick="window.location.href =' http://127.0.0.1:5500/A%20M%C3%A9rito%20de%20Testes/Caadastro%20Lilo.html'"class="btn2">PLAY</button>
                     </div>
                </div>
            </div>

            <div class="col-4 col-md-4 col-lg-2">
                <div class="card-3">
                    <div class="row">
                        <div class="level-3">
                            <div class="row">
                             <h5 class="numero">3</h5>
                            </div>
 
                            <div class="row">
                             <h5 class="name_level">NIVEL</h5>
                            </div>
                        </div>
                       </div>
 
                       <div class="row">
                         <button onclick="window.location.href =' http://127.0.0.1:5500/A%20M%C3%A9rito%20de%20Testes/Caadastro%20Lilo.html'"class="btn3">PLAY</button>
                     
                     </div>
                </div>
            </div>
            
          </div>

    </div>

    <header>
        <svg
          class="waves"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20962 10601"
        >
          <path
            class="wave-1"
            fill="#43818A"
            d="M27489 8635c504 1667 831 3818-27 5680s-2901 3434-6193 3904-7834-161-12155-589c-4321-427-8421-649-10976-1537-2555-889-3565-2443-4071-4061-505-1619-505-3302 938-4835 1442-1533 4327-2916 6274-3122s2958 764 3877 1522 1746 1304 2738 1382 2148-312 2976-730 1327-864 2136-1014c810-151 1929-6 2757 206s1363 490 1978 775c614 284 1308 574 1947 535s1223-407 1935-875c712-469 1552-1037 2240-1266 688-228 1223-117 1832 530 608 646 1290 1828 1794 3495z"
          />
  
          <path
            class="wave-2"
            fill="#57A7B3"
            d="M25681 10400c-171 822-305 1990-646 3115-341 1124-889 2206-1856 2808-968 602-2355 724-4668 1064s-5550 898-8520 987-5672-290-9037-859c-3366-568-7394-1326-9403-2118-2008-791-1996-1616-1892-3305 103-1689 298-4242 1412-5731 1113-1488 3146-1912 4953-1627 1808 284 3390 1276 4522 1878s1814 814 2423 552 1145-998 2333-1388c1187-389 3025-432 4266 275 1240 707 1884 2164 2861 2407 976 244 2285-726 3493-1308 1209-581 2316-775 3731-567 1415 207 3137 815 4290 1221 1153 407 1737 612 1926 953 189 342-18 820-188 1643z"
          />
  
          <path
            class="wave-3"
            fill="#66C3D0"
            d="M30706 11822c-291 731-653 1801-1548 2972-895 1170-2321 2441-4988 3026-2667 586-6574 485-10469 541s-7778 268-10906-256-5501-1784-6906-3382c-1404-1598-1840-3533-1957-4910-118-1377 82-2195 1029-2854 946-659 2637-1158 4033-1002s2495 968 3440 1630 1737 1175 2905 1086c1169-89 2714-780 3810-1332 1095-552 1740-965 2665-820s2130 848 3110 1360c980 513 1734 837 2458 672s1416-819 2179-1050 1597-40 3058 269c1461 310 3550 739 5069 1177 1519 437 2469 883 2998 1112 529 228 639 240 584 440-55 201-274 591-564 1321z"
          />
        </svg>
      </header>


@endsection