<?php

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
 
Route::get('/', 'WelcomeController@index');

Route::get('/shop', 'ShopsController@getIndex1');

Route::get('/show', 'ShopsController@getIndex2');

Route::get('/show', 'CommentsController@getIndex');

Route::get('/', function () {
    return view('welcome');
});



//////
Route::get('/show', function () {

    return view('show.index', ['posts' => App\Post::latest('id')->get()]);
});

// Post
Route::post('/show', function () {
    $post = new App\Post();
    $post->title = request('title');
    $post->body = request('body');
    $post->shop = request('shop');
    if($post->title == ""){
        return back()->withInput();
    }
    if($post->body == ""){
        return back()->withInput();
    }
    $post->save();

    $files = request('files');
    if ($files) foreach ($files as $file) {
        $file->store('public');
        $post->images()->create(['filename' => $file->hashName()]);
    }
    return back()->withInput();
});

// Comment
Route::post('/comments', function () {
    $comment = new App\Comment();
    $comment->post_id = request('post_id');
    $comment->save();

    $files = request('files');
    if ($files) foreach ($files as $file) {
        $file->store('public');
        $comment->images()->create(['filename' => $file->hashName()]);
    }
    return redirect('/shop');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
