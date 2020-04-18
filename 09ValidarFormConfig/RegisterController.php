 /routes/
Route::post('/user/update', 'UserController@update')->name('user.update');


/app/http/controllers/auth

 protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users', 
            'password' => 'required|string|min:8|confirmed'
            //mal condicionantes no funcionana
            /*'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],*/
        ]);
    }







