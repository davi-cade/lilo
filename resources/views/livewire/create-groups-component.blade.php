<div>
    <form wire:submit.prevent="submit"  enctype="multipart/form-data">
    @csrf
       

        <div class="mb-3">

        <div class="titulo">
                <label for="image" class="elemento">Insira sua imagem!</label>
        </div>

        <input class="form-control" type="file"  name="image" id="image" wire:model="image"><br/>
        @error('image') <span class="error">{{ $message }}</span> @enderror

        <label for="text" class="form-label">Titulo</label>
        <input class="form-control" type="text" id="title" wire:model="title" placeholder="Titulo do grupo" aria-label="default input example">
        @error('title') <span class="error">{{ $message }}</span> @enderror

        <label for="title" class="form-label">Descrição</label>
        <input class="form-control" type="text" id="description" wire:model="description" placeholder="Descrição do grupo" aria-label="default input example">
        @error('description') <span class="error">{{ $message }}</span> @enderror

        </div>
        @if (count($players) > 0)
        <button  type="submit" class="btn1">Concluir</button>
        @endif
       
    </form>

    <div>
        <div class="controle">
        <div class="titulo">
              <h1 class="elemento">Jogadores Selecionados</h1>
        </div>
        </div>

      
        <div class="scroll">
        @foreach($players as $key)
              <div class="car-player">
                <div class="row">
                  <div class="col-6">
                    <div class="row">
                      <div class="col">
                        <h1 class="elemento2">Nickname:</h1>
                      </div>
  
                      <div class="col">
                        <h1 class="elemento2">{{$key['nickname']}}</h1>
                      </div> 
                    </div>
                  
                    
                  </div>
  
                  <div class="col-6">
                    <div class="row">
                      <div class="col">
                        <h1 class="elemento3">Score:</h1>
                      </div>

                      <div class="col">
                        <h1 class="elemento3">{{$key['score']}}</h1>
                      </div>

                    </div>
                    
                  </div>
                </div>
              </div>
              @endforeach
            </div>
       
            <div class="titulo">
              <h1 class="elemento">Procure um jogador</h1>
        </div>
       
        <input class="form-control" type="text" id="player-search" wire:model="nickname" placeholder="Insira seu nickname" aria-label="default input example">

        <div class="titulo">
              <h1 class="elemento">Resposta a pesquisa</h1>
        </div>
        @foreach($allPlayers as $key)
        <div class="car-player">
                <div class="row">
                  <div class="col-6">
                    <div class="row">
                      <div class="col">
                        <h1 class="elemento2">Nickname:</h1>
                      </div>
  
                      <div class="col">
                        <h1 class="elemento2">{{$key['nickname']}}</h1>
                      </div> 
                    </div>
                  
                    
                  </div>
  
                  <div class="col-6">
                    <div class="row">
                      <div class="col">
                        <h1 class="elemento3">Score:</h1>
                      </div>

                      <div class="col">
                        <h1 class="elemento3">{{$key['score']}}</h1>
                      </div>

                    </div>
                    
                  </div>
                </div>
              </div>
            <button class="btn1" wire:click="addPalyer({{$key}})">Adicionar</button>
        
        @endforeach
       
    </div>
</div>



