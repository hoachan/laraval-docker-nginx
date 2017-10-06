<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    //
    public function index (){
        
        $posts = Post::all();

        return view('posts.index', compact('posts'));
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

        /** Validate data ************************************************/
        /**************************************************************************/
        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
        ]);
        /** Validate Data ************************************************/
        /**************************************************************************/


        /** Saving data to database ************************************************/
         /**************************************************************************/
        /** saving way 1 :  */
        // $post = new Post;  //or u can use this way :  new \App\Post

        // $post->title    = request('title');
        // $post->body     = request('body');

        // //save it to the database
        // $post->save();
        /** saving way 1 :  */

        /** Saving Way 2 */
        // Post::create([
        //     'title' => request('title'),
        //     'body'  => request('body')
        // ]);    
        /** Saving Way 2 */

        /** Saving Way 3 */
        // Post::create(request()->all());    
        /** Saving Way 3 */

        /** Saving Way 4 */
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );


        // Post::create([
        //     'title'     => request('title'),
        //     'body'      => request('body'), 
        //     'user_id'   => auth()->id()  //can write : auth()->user()->id
        // ]);    
        /** Saving Way 4 */
        /** Saving data to database ************************************************/
        /**************************************************************************/

        //and then redirect to the home page.
        return redirect('/posts');
    }
}
