@extends('layouts.main')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    



    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/Atividade/mdb.min.css" />
    <link rel="stylesheet" href="css/Atividade/styles.css" />



    <link rel="stylesheet" href="/css/Atividade/nivel.css" />
@endsection


@section('title', 'Home')

@section('content')
<div class="container">
        <header>
            <svg
              class="waves"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20962 10601"
            >
              <path
                class="wave-1"
                fill="#0497b8"
                d="M27489 8635c504 1667 831 3818-27 5680s-2901 3434-6193 3904-7834-161-12155-589c-4321-427-8421-649-10976-1537-2555-889-3565-2443-4071-4061-505-1619-505-3302 938-4835 1442-1533 4327-2916 6274-3122s2958 764 3877 1522 1746 1304 2738 1382 2148-312 2976-730 1327-864 2136-1014c810-151 1929-6 2757 206s1363 490 1978 775c614 284 1308 574 1947 535s1223-407 1935-875c712-469 1552-1037 2240-1266 688-228 1223-117 1832 530 608 646 1290 1828 1794 3495z"
              />
      
              <path
                class="wave-2"
                fill="#14cedb"
                d="M25681 10400c-171 822-305 1990-646 3115-341 1124-889 2206-1856 2808-968 602-2355 724-4668 1064s-5550 898-8520 987-5672-290-9037-859c-3366-568-7394-1326-9403-2118-2008-791-1996-1616-1892-3305 103-1689 298-4242 1412-5731 1113-1488 3146-1912 4953-1627 1808 284 3390 1276 4522 1878s1814 814 2423 552 1145-998 2333-1388c1187-389 3025-432 4266 275 1240 707 1884 2164 2861 2407 976 244 2285-726 3493-1308 1209-581 2316-775 3731-567 1415 207 3137 815 4290 1221 1153 407 1737 612 1926 953 189 342-18 820-188 1643z"
              />
      
              <path
                class="wave-3"
                fill="#3ee5de"
                d="M30706 11822c-291 731-653 1801-1548 2972-895 1170-2321 2441-4988 3026-2667 586-6574 485-10469 541s-7778 268-10906-256-5501-1784-6906-3382c-1404-1598-1840-3533-1957-4910-118-1377 82-2195 1029-2854 946-659 2637-1158 4033-1002s2495 968 3440 1630 1737 1175 2905 1086c1169-89 2714-780 3810-1332 1095-552 1740-965 2665-820s2130 848 3110 1360c980 513 1734 837 2458 672s1416-819 2179-1050 1597-40 3058 269c1461 310 3550 739 5069 1177 1519 437 2469 883 2998 1112 529 228 639 240 584 440-55 201-274 591-564 1321z"
              />
            </svg>
          </header>
    
          <div class="box">
    
            <div class="row tow">
                <div class="col-md-1 col-lg-2 col-xl-2">

                </div>
    
              <div class="col-14 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                <div class="box_one">
                </div>
    
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                <div class="box_two">
                  <!-- Start your project here-->
    <div class="container my-5">
      <div id="intro">
        <div class="counter">
          <p class="prefix">Question:</p>
          <h1 id="counter">1/10</h1>
        </div>
        <div class="score">
          <p class="prefix">Score:</p>
          <h1 id="score">3</h1>
        </div>
      </div>
      <div class="question-holder row">
        <div class="col-12">
          <h1 id="question">What is the answer to this question?</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="answer-container card">
            <p class="answer-prefix">A</p>
            <p class="answer-text" data-answer="a">Answer A</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="answer-container card">
            <p class="answer-prefix">B</p>
            <p class="answer-text" data-answer="b">Answer B</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="answer-container card">
            <p class="answer-prefix">C</p>
            <p class="answer-text" data-answer="c">Answer B</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="answer-container card">
            <p class="answer-prefix">D</p>
            <p class="answer-text" data-answer="d">Answer D</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="endGameModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Game ended</h5>
            <button
              type="button"
              class="btn-close"
              data-mdb-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body" id="modal-body">...</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-mdb-dismiss="modal"
            >
              Close
            </button>
            <button
              type="button"
              class="btn btn-primary"
              data-mdb-dismiss="modal"
              id="restart"
            >
              Restart
            </button>
          </div>
        </div>
      </div>
    </div>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    </div>  


     <!-- MDB -->
     <script type="text/javascript" src="js/mdb.min.js"></script>
     <!-- Custom scripts -->
     <script src="js/scripts.js"></script>
@endsection