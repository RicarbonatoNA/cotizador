<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use App\Models\Eloquent;

class Business extends Model
{
    use HasFactory;
    protected $table='business';
    protected $fillable =['id', 'name', 'identificador_fiscal',
    'direccion_facturacion', 'telefono', 'logo', 'notas', 'user_id',];
    public $timetamps = false;
}

