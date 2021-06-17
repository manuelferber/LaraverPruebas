<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    public $timestamps = false;
    protected $fillable = [
        'id' ,
        'nombres' ,
        'apellidos', 
        'cedula' ,
        'correo' ,
        'telefono' 
        

    ];





}
