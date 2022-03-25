<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    use HasFactory;

    //protected $fillable = ['modelo', 'año', 'dueños', 'consesionaria' , 'destacado', 'color' , 'marca', 'kilometros' , 'precio', 'motor', 'transmision', 'puertas', 'code'];

    protected $fillable  =
    [
        'modelo',
        'año',
        'dueños',
        'consesionaria',
        'destacado',
        'color',
        'marca',
        'kilometros',
        'precio',
        'motor',
        'transmision',
        'puertas',
        'code',
    ];
}
