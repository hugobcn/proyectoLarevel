/routes/


<?php

use Illuminate\Support\Facades\Route;
//usar modelos
use App\Image;

Route::get('/', function () {
    
    //extraer todas las imagenes que hay en base
    $images = Image::all();
    foreach($images as $image){
        echo $image->image_path."<br>";
        echo $image->description."<br>";
        //extraer datos de otras tablas relacionadas
        echo $image->user->name.' '.$image->user->surname.'<br>';
        
        //si llega comentario
        if(count($image->comments) >= 1){
        echo "<h4>Comentarios </h4>";
        foreach($image->comments as $comment){
            echo $comment->user->name.' '.$comment->user->surname.': ';
            //extraer conetnido comentarios
            echo $comment->content."<br>";
        }
        }
        echo 'LIKES: '.count($image->likes);
        echo "<hr>";
    }
    
    die();
    return view('welcome');
});

