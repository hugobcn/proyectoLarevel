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
	
    public function update(Request $request) {

        //Validación
        $validate = $this->validate($request, [
            'description' => 'required',
            'image_path' => 'image'
        ]);

        // Recoger datos
        $image_id = $request->input('image_id');
        $image_path = $request->file('image_path');
        $description = $request->input('description');

        // Conseguir objeto image
        $image = Image::find($image_id);
        $image->description = $description;

        // Subir fichero
        if ($image_path) {
            $image_path_name = time() . $image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $image->image_path = $image_path_name;
        }

        
        // Actualizar registro
		$image->update();
        
        return redirect()->route('image.detail', ['id' => $image_id])
						 ->with(['message' => 'OK,Imagen actualizada']);
        
        //var_dump($image_id);
        //var_dump($description);
        //die();
    }


}
