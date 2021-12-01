<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        // I want to select from the posts table where the slug column is = to what we get to the URI and give me the first result
        // $post = DB::table('posts')->where('slug', $slug)->first();
        // Using Eloquent
        $post = Post::where('slug', $slug)->firstOrFail();
        // To inspect a variable and kill the execution
        // dd($post);
        // $posts = [
        //     'my-first-post' => 'Hello, this is my first post!',
        //     'my-second-post' => 'Now I am geting the hang of this blogging thing'
        // ];
    
        // if (! $post){
        //     abort(404, 'Sorry, that post was not found');
        // };
        return view('post', [
            'post' => $post
        ]);
    }
}
