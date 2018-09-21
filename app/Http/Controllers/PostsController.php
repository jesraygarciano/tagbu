<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    /**
     * Display a paginated list of posts.
     * 
     * @return Response
     */

    public function index(){

        $posts = Post::paginate(5);

        return view('posts.index', compact('posts'));
    }

    /**
     * Favorite a post
     * 
     * @param Post $post
     * @return response
     */
    public function favoritePost(Post $post)
    {

        Auth::user()->favorites()->attach($post->id);

        return back();
    }

    /**
     * Unfavorite a post
     * 
     * @param Post $post
     * @return response
     */
    public function unFavoritePost(Post $post){

        Auth::user()->favorites()->detach($post->id);

        return back();

    }
}
