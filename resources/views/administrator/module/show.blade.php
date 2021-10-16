<h1>{{$moduleCaught['title']}}</h1>
<h1>{{$moduleCaught['description']}}</h1>

<form action="/module/{{$moduleCaught['slug']}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<div>
    
</div>

