<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table='client';
    protected $fillable =['id', 'name', 'email', 'identificador_fiscal', 
    'telefono', 'calle', 'numero','colonia', 'codigo_postal', 'ciudad', 'estado',
    'pais', 'notas', 'user_id'];
    public $timetamps = false;
}
