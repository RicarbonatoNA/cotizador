<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;

class BusinessController extends Controller
{
    public function Create(Request $request)
    {
        $business = Business::create([
            'id' =>$request->id, 
            'name' =>$request->name, ['required'],
            'identificador_fiscal' =>$request->identificador_fiscal, ['required'],
            'direccion_facturacion' =>$request->direccion_facturacion, ['required'],
            'telefono' =>$request->telefono, ['required'],
            'logo' =>$request->logo, ['required'],
            'notas' =>$request->notas, ['required'],
            'user_id'=>$request->user_id, ['required'],
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at,
        ]);
        return $business;
    }
    public function Delete($id){
        $business = Business::find($id); 
        $business->delete();
        return $business;
    }
    public function Update(Request $request, $id)
    {
        $business = Business::find($id);
        $business->name=$request->name;
        $business->identificador_fiscal=$request->identificador_fiscal;
        $business->direccion_facturacion=$request->direccion_facturacion;
        $business->telefono=$request->telefono;
        $business->logo=$request->logo;
        $business->notas=$request->notas;
        $business->user_id=$request->user_id;
        $business->save();
        return $business;
    }
    public function Read(){
        $business = Business::all();
        return $business;
    }
}
