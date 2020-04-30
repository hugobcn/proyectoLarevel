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
     public function index() 
    {
        //extraer todos los usuarios
        //$users =User::all();
        //extraer todos los usuarios con orden y paginador
        $users = User::orderBy('id','desc')->paginate(5);
        
        return view('user.index',['users'=>$users]);
    }
    
}
