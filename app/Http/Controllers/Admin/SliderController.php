<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Slider;


class SliderController extends Controller
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

        $sliders = Slider::all();

        return view('admin.slider.index', compact('sliders'));
    }


    
    public function create(Request $request) // salva los datos insertados en el formulario, es decir, mete el question en la BD.
    {
        // 2 formas para obtener el id del usuario logueado
        //$user_id = Auth::id();
        //$user_id = Auth::user()->id;

        $slider = Slider::create(
            [
                'url' => $request->file('image')->store('public/slider')
            ]
        );
        

        // Otra forma para subir una imagen
        // $file = $request->file('question_image');
        // $file_name = time()."_".$file->getClientOriginalName();
        // \Storage::disk('local')->put($file_name,  \File::get($file));

        if ($slider) {
            return redirect()->route('sliders.index')
            ->with('info', 'Imagen subida correctamente');
        } else {
            return redirect()->route('sliders.index')
            ->with('error', 'Exisitió un problema, intenta nuevamente');
        }

        
    }   
    
    public function delete($id){
        $slider = Slider::find($id)->delete();

        return back()->with('info', 'Imagen eliminadas correctamente');
    } 

    
}

