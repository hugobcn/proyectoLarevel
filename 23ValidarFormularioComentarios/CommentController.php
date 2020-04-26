App\Http\Controllers



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    //solo personal autorizado
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function store(Request $request)
    {
        
       //validar datos
        $validate = $this->validate($request,[
            'image_id' => 'integer|required|',
            'content'=> 'string|required',
        ]);

        //recoger datos
        $image_id = $request->input('image_id');
        $content = $request->input('content');
        
        //var_dump($content);
        //var_dump($image_id);
        //die();
                
                
    }
    
}
