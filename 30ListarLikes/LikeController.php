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
     
    public function index() {
        $user = \Auth::user();
		$likes = Like::where('user_id', $user->id)
                        ->orderBy('id', 'desc')
                        ->paginate(5);
		
		return view('like.index',[
			'likes' => $likes
		]);
        
    }
    
}
