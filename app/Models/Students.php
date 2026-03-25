<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory; //sirve para conectar un modelo con su respectiva fabrica

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'status'
    ];

    protected $casts = [ //los atributos tienen que ser convertidos a tipos especificos, convierte status a un valor consistente
        'status'=>'string' 
    ];

}
