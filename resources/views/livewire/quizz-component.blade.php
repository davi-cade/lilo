<div>
<div class="box">
    
    <div class="row tow">
        <div class="col-md-1 col-lg-2 col-xl-2">

        </div>

        @if ($yes === 0)
            <div class="col-14 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                <div class="box_one">
                    <video preload="auto" muted autoplay loop><source src="{{asset($card[0]->url_video)}}"></video>
                    {{$card[0]->title}}
                </div>

              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                <div class="box_two">
                  <!-- Start your project here-->
        <div class="container my-5">
        <div id="intro">
        <div class="score">
          <p class="prefix">Pontuação acumulada:</p>
          <h5 id="score">{{$score}}</h5>
        </div>
        </div>
        <div class="question-holder row">
        <div class="col-12">
          <h3 id="question">O que quer dizer esse sinal?</h3>
        </div>
        </div>

        <div class="row">
          <form wire:submit.prevent="checkAnswer()">
            @foreach($alternative as $key)
              <div class="col-12">
                <div class="answer-container card">
                  <p class="answer-prefix">{{$loop->iteration}}.</p>
                  <input wire:model="optinSelected" wire:click="checkAnswer({{$card[0]->id}})" type="radio" id="{{$key['title']}}{{$loop->iteration}}" name="option" value="{{$key['title']}}"/>
                  <label for="option" class="answer-text" data-answer="a">{{$key['title']}}</p>
                </div>
              </div>
            @endforeach
          </form>
        </div>
      @else
        <div class="col-14 col-sm-6 col-md-6 col-lg-5 col-xl-5">
            <div class="box_one">
              <p>Você concluiu o a atividade</p>
              <video src="http://www.acessibilidadebrasil.org.br/libras_3/public/media/palavras/videos/parabensSm_Prog001.mp4" preload="auto" muted autoplay loop></video>
              <button type="button" class="btn btn-primary" id="finally" wire:click="finally">
                  Voltar ao Modulo principal
              </button> 
            </div>
        </div>
          
      @endif

      

<!-- Modal 
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
      id="restart">
      Restart
    </button>
  </div>
</div>
</div>
</div>-->

        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>  
</div>
