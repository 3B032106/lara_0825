<?php

use App\Http\Controllers\PostController;
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

    $lastPost = Post::orderBy('id','DESC')->first();
    dd($lastPost);

});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');
