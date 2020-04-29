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
    
    //eliminar imagen & asociados
    public function delete($id) {

        //obtener usuario autorizado
        $user = \Auth::user();

        //obtener imagenes & associados
        $image = Image::find($id);
        $comments = Comment::where('image_id', $id)->get();
        $likes = Like::where('image_id', $id)->get();

        //condicion & eliminacion Imagen & assoc
        if ($user && $image && $image->user->id == $user->id) {
            //eliminar associados imagen
            if ($comments && count($comments) >= 1) {
                foreach ($comments as $comment) {
                    $comment->delete();
                }
            }

            if ($likes && count($likes) >= 1) {
                foreach ($likes as $like) {
                    $like->delete();
                }
            }

            //eliminar imagen
            Storage::disk('images')->delete($image->image_path);
            $image->delete();
           
            $message = array('message' => 'Ok,imagen borrada');
        } else {
            $message = array('message' => 'KO,imagen no borrada');
        }
       
        //redirecion
        return redirect()->route('home')-> with($message);
    }

} 
}
