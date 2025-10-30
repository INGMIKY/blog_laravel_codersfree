<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="{{route('posts.index')}}">Volver a post</a>

    <h1>Titulo: {{$post->title}}</h1>
    <p>
        <b>Categoria:</b> {{$post->category}} 
    </p>
    <p>
        {{$post->content}}
    </p>
    
    <a href="{{route('posts.edit', $post)}}">Editar post</a>

    <form action="{{route('posts.delete', $post)}}" method="POST">

        @csrf
        @method('DELETE')

        <button>Eliminar post</button>
    </form>

</body>
</html>