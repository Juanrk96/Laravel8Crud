<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoModel extends Model
{
    //use HasFactory;
    protected $table = 'empleados';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'descripcion'];
}
