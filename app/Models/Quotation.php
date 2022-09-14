<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $table='quotation';
    protected $fillable =['id', 'business_id', 'referencia', 'totales_impuesto', 'fecha', 'resumen_cotizacion', 'divisa', 'sucursal', 'product_id', 'total_producto'];
    public $timetamps = false;
}
