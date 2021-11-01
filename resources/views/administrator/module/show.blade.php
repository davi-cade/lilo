<h1>{{$module['title']}}</h1>
<p>{{$module['description']}}</p>

<form action="/module/{{$module['slug']}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<h1>Tarefas</h1>
<div>
    @foreach($tasks as $key)
        <div>
            <h3>{{$key->title}}</h3>
            <p>{{$key->description}}</p>
            <a href="">ver</a>
        </div>
    @endforeach
</div>

