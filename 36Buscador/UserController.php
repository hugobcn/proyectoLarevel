App\Http\Controllers


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//cargar modelo
use App\Like;

class LikeController extends Controller
{
    //solo personal autorizado
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    //gente
     public function index($search = null) 
    {
        //extraer todos los usuarios
        //$users =User::all();
        //extraer todos los usuarios con orden y paginador
         
        if (!empty($search)) {
            //where( nick LIKE %search% )
            $users = User::where('nick','LIKE','%'.$search.'%')
                    ->orWhere('name','LIKE','%'.$search.'%')
                    ->orderBy('id','desc')
                    ->paginate(5);
        } else {
             $users = User::orderBy('id','desc')->paginate(5);
        }
         
        
        
        return view('user.index',['users'=>$users]);
    }
    
}
