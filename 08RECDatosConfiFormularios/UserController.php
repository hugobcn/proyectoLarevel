 /routes/
Route::post('/user/update', 'UserController@update')->name('user.update');


/app/http/controllers/

public function update (Request $request){
        $id = \Auth::user()->id;
        $name = $request->input('name');
        $surname = $request-> input('surname');
        $nick = $request-> input('nick');
        $email = $request-> input('email');
        
        var_dump($id);
        var_dump($name);
        var_dump($surname);
        
        die();
    }








