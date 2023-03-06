<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home ()
    {
        $posts = Post::latest()->paginate();

        return view('home',['posts' => $posts]);

    }
 
    public function post (Post $post)
    {
          //consulta a la base de datos
    return  view ('post',['post' =>$post]);
    }
}
