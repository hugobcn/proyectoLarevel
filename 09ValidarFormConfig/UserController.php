 /routes/
Route::post('/user/update', 'UserController@update')->name('user.update');


/app/http/controllers/auth

 public function update (Request $request){
        //para validar nick igual que el suyo
        //unique:users,nick,'.$id, otro nick o solo el mimso del registro
        $id = \Auth::user()->id;
        
        $validate = $this->validate($request,[
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:255|unique:users,nick,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id        
        ]);
        
        $id = \Auth::user()->id;
        $name = $request->input('name');
        $surname = $request-> input('surname');
        $nick = $request-> input('nick');
        $email = $request-> input('email');
        
        //var_dump($id);
        //var_dump($name);
        //var_dump($surname);
        
        //die();
    }








