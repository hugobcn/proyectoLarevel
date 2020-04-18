 /routes/
Route::post('/user/update', 'UserController@update')->name('user.update');


/app/http/controllers/auth

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config(){
        return view('user.config');
    }
    
    
    public function update (Request $request){
        //para validar nick igual que el suyo
        //unique:users,nick,'.$id, otro nick o solo el mimso del registro
        //consegui usuario identificado
        $user = \Auth::user();
        $id =  $user->id;
        
        //validacion formulario
        $validate = $this->validate($request,[
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:255|unique:users,nick,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id        
        ]);
        
        //recoger datos del formulario       
        $name = $request->input('name');
        $surname = $request-> input('surname');
        $nick = $request-> input('nick');
        $email = $request-> input('email');
        
        
        //asignar nuevos valores  al objeto del usuario
        $user -> name =$name;
        $user -> surname = $surname;
        $user -> nick = $nick;
        $user -> email = $email;
        
        //ejecutar consulta y cambios en BBDD
        $user->update();
        
        //redirrecion 
        return redirect ()->route('config')->with(['message'=>'Ok, usuario actualizado']);
        
        //var_dump($id);
        //var_dump($name);
        //var_dump($surname);
        
        //die();
    }
}
