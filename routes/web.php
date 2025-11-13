<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User2;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', HomeController::class);

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [Postcontroller::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('posts.destroy');


Route::resource('posts', PostController::class);

// Route::get('/prueba', function() {
//     // Crear un nuevo post
//     // $post = new Post;

//     // $post->title = 'TituLO DE prUEba 4';
//     // $post->content = 'Contenido de prueba 4';
//     // $post->category = 'Categoria de prueba 4';

//     // $post->save();

//     // return $post;

//     // 

//     // Buscar un registro por su ID, o por otro campo y actualizarlo
//     $post = Post::find(1);
//     // $post = Post::where('title', 'Titulo de prueba 1')->first();

//     // $post -> category = 'Desarrollo web';
//     // $post -> save();
//     dd($post->is_active);

//     // 

//     // Recuper mas de un registro y listarlos
//     // $posts = Post::where('id', '>=', '2')->get();
//     // $posts = Post::orderBy('category', 'asc')->get();
//     // $posts = Post::orderBy('category', 'asc')->select('id', 'title', 'category')->take(2)->get();
//     // return $posts;

//     // 

//     // Eliminar un registro
//     // $post = Post::find(1);
//     // $post->delete();
//     // return 'El post se ha eliminado correctamente';
// });


Route::get('/prueba', function() {
    
    // User2::create([
    //     'name' => 'Miguel Barrera',
    //     'email' => 'miguel@gmail.com',
    //     'password' => bcrypt('12345678'),
    // ]);

    // Phone::create([
    //     'number' => '987654321',
    //     'user2_id' => 1,
    // ]);

    $user2 = User2::where('id', 1)->with('phone')->first();

    return $user2;
});