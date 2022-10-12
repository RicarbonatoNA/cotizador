<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Create(Request $request)
    {
        $product = Product::create([
            'id' =>$request->id, 
            'name' =>$request->name, ['required'],
            'sku' =>$request->sku, ['required'],
            'descripcion'=>$request->descripcion, ['required'],
            'cantidad'=>$request->cantidad, ['required'],
            'precio_compra'=>$request->precio_compra, ['required'],
            'precio_venta'=>$request->precio_venta, ['required'],
            'divisa'=>$request->divisa, ['required'],
            'impuesto'=>$request->impuesto, ['required'],
            'unidad'=>$request->unidad, ['required'],
            'marca'=>$request->marca, ['required'],
            'imagen'=>$request->imagen, ['required'],
            'notas'=>$request->notas, ['required'],
            'business_id'=>$request->business_id, ['required'],
            'created_at' =>$request->created_at, 
            'updated_at' =>$request->updated_at 
        ]);
        return $product;
    }
    public function Delete($id){
        $product = Product::find($id); 
        $product->delete();
        return $product;
    }
    public function Update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name=$request->name;
        $product->sku=$request->sku;
        $product->descripcion=$request->descripcion;
        $product->cantidad=$request->cantidad;
        $product->precio_compra=$request->precio_compra;
        $product->precio_venta=$request->precio_venta;
        $product->divisa=$request->divisa;
        $product->impuesto=$request->impuesto;
        $product->unidad=$request->unidad;
        $product->marca=$request->marca;
        $product->imagen=$request->imagen;
        $product->notas=$request->notas;
        $product->save();
        return $product;
    }
    public function Read(){
        $product = Product::all();
        return $product;
    }
}
