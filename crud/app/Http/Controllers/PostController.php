<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'Meu primeiro post',
            'content' => 'Conteúdo aleatório',
            'author' => 'Mateus'
        ];

        // Forma + comum
        $post = new Post($new_post);
        $post->save();

        // Segunda forma:
        // $post = new Post();

        // $post->title = 'Meu segundo post';
        // $post->content = 'Conteudo do segundo post';
        // $post->author = 'Mateus Alves';
        // $post->save();

        dd($post);

    }

    public function read(Request $r) {
        $post = new Post();

        $post = $post->find(1);

        return $post;
    }

    public function all(Request $r) {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $r) {
        $posts = Post::where('id', '>', 0)->update([
            'author' => 'Desconhecido'
        ]);

        return $posts;
    }

    public function delete(Request $r) {
        $post = Post::find(2);

        if($post) {
            return $post->delete();
        }

        return "Não existe";

    }

}
