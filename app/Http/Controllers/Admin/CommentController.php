<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Comment;


class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request) {

        $post = Comment::create(
            [
                'user_id' => Auth::id(),
                'post_id' =>  $request->input('post_id'),
                'body' => $request->input('body')
            ]);
            
        return back()->with('info', 'Comentario enviado satifactoriamente');
    }
    
}