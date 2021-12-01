<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function () {
    $name = request('name');
    return view('test',[
        'name' => $name
    ]);
    // return view('welcome');
});

// Route::get('/posts/{post}', function($post){
//     $posts = [
//         'my-first-post' => 'Hello, this is my first post',
//         'my-second-post' => 'Now I am geting the hang of this blogging thing'
//     ];

//     if (!array_key_exists($post, $posts)){
//         abort(404, 'Sorry, that post was not found');
//     };
//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });


Route::get('/posts/{post}', 'PostsController@show');