<x-app-layout>
    <h1>Formulario para editar un post</h1>

    <form action="/posts/{{$post->id}}" method="POST">

        @csrf
        @method('PUT')

        <label for="">
            Titulo:      
            <input type="text" name="title" value="{{$post->title}}">
        </label>

        <br>
        <br>

        <label for="">
            Categoria:
            <input type="text" name="category" value="{{$post->category}}">
        </label>

        <br>
        <br>

        <label for="">
            Contenido:
            <textarea name="content" >{{$post->content}}</textarea>
        </label>

        <br>
        <br>
        
        <button type="submit">Actualizar post</button>
    </form>

</x-app-layout>