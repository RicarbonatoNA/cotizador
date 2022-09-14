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
            'name' =>$request->name,
            'descripcion'=>$request->descripcion,
            'cantidad'=>$request->cantidad,
            'precio'=>$request->precio,
            'descuento'=>$request->descuento,
            'impuesto'=>$request->impuesto,
            'total'=>$request->total,
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
        $product->descripcion=$request->descripcion;
        $product->cantidad=$request->cantidad;
        $product->precio=$request->precio;
        $product->descuento=$request->descuento;
        $product->impuesto=$request->impuesto;
        $product->total=$request->total;
        $product->save();
        return $product;
    }
    public function Read(){
        $product = Product::all();
        return $product;
    }
}
