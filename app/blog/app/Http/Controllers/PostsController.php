<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    //
    public function index (){
        
        return view('posts.index');
    }

    /**
     * GET /posts/create
     * 
     */
    public function create(){

        return view('posts.create');
    }

    /**
     * POST /posts/store
     * 
     */
    public function store(){
        //create a new post using the request data
        //save it to the database
        //and then redirect to the home page.
        //debug request :         dd(request()->all());
        $post = new Post;  //or u can use this way :  new \App\Post

        $post->title    = request('title');
        $post->body     = request('body');

        //save it to the database
        $post->save();

        //and then redirect to the home page.
        return redirect('/');
    }
}
