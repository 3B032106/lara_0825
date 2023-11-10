<?php

use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    //    $allPosts = Post::all();
    //    dd($allPosts);

    //    $featurePosts = Post::where('is_feature', true)->get();
    //    dd($featurePosts);

    //    $fourthPost = Post::find(4);
    //    dd($fourthPost);

    //    $lastPost = Post::orderBy('id','DESC')->first();
    //    dd($lastPost);

    $post = Post::find(6);
    echo '標題: '.$post->title.'<br>';
    echo '內容: '.$post->content.'<br>';
    echo '--------------------------'.'<br>';
    $comments = $post->comments()->get();
    foreach ($comments as $comment){
        echo '留言: '.$comment->content."<br>";
        echo '--------------------------'.'<br>';
    }

});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');
