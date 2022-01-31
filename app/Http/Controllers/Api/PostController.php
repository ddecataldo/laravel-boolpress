<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();

        

        foreach($data as $post) {
            // In questo modo rimuovo l'html presente nel testo
            $content = strip_tags($post->content);
            // In questo modo, sovrascrivo l'indice "content" nell'array (e di conseguenza nelle API) e se la lunghezza del testo è maggiore di 200 verrà troncata
            $post["content"] = strlen($content) > 100 ? substr($content, 0, 200) . "..." : $content;
        }

        return $data;
    }
    
}
