<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $table = 'empleados';
    
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion'
    ];
    use HasFactory;
}
