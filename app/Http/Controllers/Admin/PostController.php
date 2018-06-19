<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Post;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
    
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        return view('admin.posts.create');
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function store(Request $request) {

        $post = Post::create(
            [
                'user_id' => Auth::id(),
                'title' => $request->input('title'),
                'body' => $request->input('body')
            ]);
            
        return redirect()->route('posts.index')
                         ->with('info', 'Tema creado satifactoriamente');
       
    }

    public function update(Request $request, $id) {

        $post = Post::find($id);

        $post->update(
            [
                'user_id' => Auth::id(),
                'title' => $request->input('title'),
                'body' => $request->input('body')
            ]);
            
        return redirect()->route('posts.index')
                         ->with('info', 'Tema actualizado satifactoriamente');
       
    }

    public function show($id) {
        $post = Post::find($id);
        $comments = Post::find($id)->comments;
        return view('admin.posts.show', compact('post', 'comments'));
        
    }

    public function destroy($id) {
        Post::find($id)->delete();
        return back()->with('info', 'Tema eliminadas correctamente y sus comentarios');
    }

    public function activate($id){

        Post::query()->update(['active' => 0]);
        $post = Post::find($id);

        $post->update(
            [
                'active' => 1,
            ]);
            
        return redirect()->route('posts.index')
                         ->with('info', "Tema {$post->title} marcado como activo");
    }
    
}