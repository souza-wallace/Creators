<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        $posts = Post::orderBy('id', 'DESC')->get();        
        return view('posts.list', compact('posts'));

    }
    public function new(){
        return view('posts.form');

    }
    public function add(Request $request){
        $post = new Post();
        $validated = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
        ]);
        $post = $post->create($request->all());
        return redirect::to('/posts');

    }
    public function edit($id){
        $post = new post();
        $post = Post::findOrFail($id);
        return view('posts.form', compact('post'));
    }

    public function update($id, Request $request){
        $post = new Post();
        $post = Post::findOrFail($id);
        $validated = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
        ]);
        $post->update($request->all());
        return redirect::to('/posts');

    }

    public function delete($id){
        $post = new Post();

        $post = Post::findOrFail($id);
        $post->delete();
        return redirect::to('/posts');

    }
}
