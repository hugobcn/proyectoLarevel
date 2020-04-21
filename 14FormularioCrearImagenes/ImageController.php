App\Http\Controllers

<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    
    //solo personal autorizado
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function create()
     {
         return view ('image.create');
         
     }
    
}





