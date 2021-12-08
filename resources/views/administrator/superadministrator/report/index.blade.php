<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <a href="{{url('/admin/home')}}">Voltar</a>
    <h1>Relatório</h1>
    @foreach ($reports as $key)
        <div>
            <p>{{$key->Admin->getName()}}</p>
            <p>{{$key->Admin->getEmail()}}</p> 
            <p>{{$key->type_report}}</p>
            <p>{{$key->model_type}}</p>
            <p>{{$key->getCreationDate()}}</p>
        </div>
    @endforeach
</body>
</html>