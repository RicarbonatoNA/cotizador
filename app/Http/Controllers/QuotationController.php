<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function Create(Request $request)
    {
        $quotation = Quotation::create([
            'id' =>$request->id, 
            'business_id' =>$request->business_id,
            'referencia'=>$request->referencia,
            'totales_impuesto'=>$request->totales_impuesto,
            'fecha'=>$request->fecha,
            'resumen_cotizacion'=>$request->resumen_cotizacion,
            'divisa'=>$request->divisa,
            'sucursal'=>$request->sucursal,
            'product_id'=>$request->product_id,
            'total_producto'=>$request->total_producto,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $quotation;
    }
    public function Delete($id){
        $quotation = Quotation::find($id); 
        $quotation->delete();
        return $quotation;
    }
    public function Update(Request $request, $id)
    {
        $quotation = Quotation::find($id);
        $quotation->business_id=$request->business_id;
        $quotation->referencia=$request->referencia;
        $quotation->totales_impuesto=$request->totales_impuesto;
        $quotation->fecha=$request->fecha;
        $quotation->resumen_cotizacion=$request->resumen_cotizacion;
        $quotation->divisa=$request->divisa;
        $quotation->product_id=$request->product_id;
        $quotation->total_producto=$request->total_producto;
        $quotation->save();
        return $quotation;
    }
    public function Read(){
        $quotation = Quotation::all();
        return $quotation;
    }
}
