<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @livewireStyles
    
<link rel="stylesheet" href="\css\Modulo\modulo-register.css">
  
</head>
<body>
    <div class="container">
    <div class="row two">
            <div class="col-12">
                <div class="box_one">
                <div class="titulo">
                        <h1 class="elemento">Cadastrar Modulo</h1>
                      </div>

                    
                      <div>
                        <form method="POST" action="{{url('/admin/module/publish')}}" enctype="multipart/form-data">
                        @csrf
                           
                    
                            <div class="mb-3">
                    
                            <div class="titulo">
                                    <label for="image" class="elemento">Insira a iamgem do modulo!</label>
                            </div>
                    
                            <input type="file" name="image" id="image"><br/>
                            @error('image') <span class="error">{{ $message }}</span> @enderror
                    
                            <label for="text" class="form-label">Titulo</label>
                            <input class="form-control" type="text" id="title" placeholder="Titulo do modulo"  aria-label="default input example"  name="title" required>  
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                    
                            <label for="title" class="form-label">Descrição</label>
                            <input class="form-control" type="text" id="description" placeholder="Descrição do modulo" aria-label="default input example" name="description" required>
                            @error('description') <span class="error">{{ $message }}</span> @enderror
                    
                            </div>
                          
                            <button class="btn1">Publicar</button>
                    
                        </form>
                    
                        <div>
                          
                            
                    </div>



                    <div class="titulo">
                                  <h1 class="elemento">Modulos Cadastrados</h1>
                            </div>

                            @livewire('App\Http\Livewire\ShowModulesComponent')
                                
                                </div>
                                
                    
                    
                    
                    



                   

                    </div>
                    </div>            
    </div>

   
    </div>
    
    
    @livewireScripts
</body>
</html>

    
    
    

