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
     
     public function  profile($id)
    {
        $user =User::find($id);
        
        return view ('user.profile',['user'=>$user]);
        
    }
    
}
