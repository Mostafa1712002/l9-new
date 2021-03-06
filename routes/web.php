<?php

use App\Models\Posts;
use App\Enums\PostsState;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $post = new Posts;
    $post->user_id = 1;
    $post->title = "the title";
    $post->body = "the body";
    $post->state = PostsState::Draft; // "draft"
    $post->save();

    return "Done";
    // return Posts::search("Praesentium")->get();
    // return Blade::render("hi every one");

    // return view('welcome');
})->name("home");

Route::controller(PostsController::class)->group(function () {
    Route::get("/index", "index");
});
