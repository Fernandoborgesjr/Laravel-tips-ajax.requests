<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm()
    {
        return view('formPost');
    }
    public function debug(Request $request)
    {
       var_dump($request->except(['_token']));
        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->author = 1;
        $post->save();
        //$post->create($request->except(['_token']));
    }

    public function show(Post $post){
        echo "<h1>Artigo:</h1>";
        echo "<p>#{$post->id} {$post->title} {$post->content}</p>";
        
        $user = $post->author()->first();
        
        echo "<h1>Usuario:</h1>";
        echo "<p>#{$user->id} {$user->name} {$user->email}</p>";


        $categories = $post->categories()->get();

        if($categories){
            echo "<h1>Categorias:</h1>";
            foreach($categories as $category){
            echo "<p>#{$category->id} {$category->title}</p>";
        }

        }
    }
}
