<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Video;


class VideoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
        if(!Gate::allows('is_admin'))
        {
            return 'Acceso no autorizado';
        }

        $videos = Video::all();

        return view('admin.video.index', compact('videos'));
    }


    
    public function store(Request $request) // salva los datos insertados en el formulario, es decir, mete el question en la BD.
    {


        $video = Video::create(
            [
                'title' => $request->input('title'),
                'url' => $request->input('url'),
            ]
        );
        

        if ($video) {
            return redirect()->route('videos.index')
            ->with('info', 'Url de video agregado correctamente');
        } else {
            return redirect()->route('videos.index')
            ->with('error', 'Exisitió un problema, intenta nuevamente');
        }

        
    }   
    
    public function destroy($id){
        $video = Video::find($id)->delete();

        return back()->with('info', 'Url de video eliminada correctamente');
    } 

    
}

