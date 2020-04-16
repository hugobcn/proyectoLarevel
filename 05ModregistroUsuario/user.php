/app/


 <?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //modRegistroVo1 'role','surname', 'nick',
    protected $fillable = [
        'role', 'name', 'surname', 'nick', 'email', 'password',
    ];
