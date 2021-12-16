<div>
<h3>Módulos</h3>
    @foreach($modules as $key)
    <div class="scroll">
                         
                         <div class="card-mod">
                 
                         <div class="row">
                             <div class="col">
                              <div class="descrição">
                                 <h2 class="elemento2">{{$key->getTitle()}}</h2>
                              </div>
                             </div>
                             
                             <div class="col">
                                 <dic class="descrição">
                                     <p class="elemento2">{{$key->getDescription()}}</p>
                                 </dic>
                                
                             </div>
                             
                             <div class="col">
                                 
                               
                                 <button onclick="window.location.href ='/admin/module/{{$key->getSlug()}}'"class="btn1">Ver</button>
                                 
                             </div>
                             
                             <div class="col">
                                 <button wire:click="destroy({{$key}})"  class="btn1" >Deletar</button>
                             </div>
                         </div>
                 
                         </div>
                     </div>
       
    @endforeach
</div>




