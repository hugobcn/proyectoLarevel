App\Http\Controllers




<?php
 
namespace App\Http\Controllers;

//utilizar modelo
use App\Image;
use App\Comment;
use App\Like;

class ImageController extends Controller
{
    
    //solo personal autorizado
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function edit($id){
		$user = \Auth::user();
		$image = Image::find($id);
		
		if($user && $image && $image->user->id == $user->id){
			return view('image.edit', [
				'image' => $image
			]);
		}else{
			return redirect()->route('home');
		}
	}
}
