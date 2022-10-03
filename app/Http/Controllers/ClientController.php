<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Create(Request $request)
    {
        $client = Client::create([
            'id' =>$request->id, 
            'name' =>$request->name, ['required'],
            'email' =>$request->email, ['required'],
            'identificador_fiscal' =>$request->identificador_fiscal, ['required'],
            'telefono' =>$request->telefono, ['required'],
            'calle' =>$request->calle, ['required'],
            'numero' =>$request->numero, ['required'],
            'colonia' =>$request->colonia, ['required'],
            'codigo_postal' =>$request->codigo_postal, ['required'],
            'ciudad' =>$request->ciudad, ['required'],
            'estado' =>$request->estado, ['required'],
            'pais' =>$request->pais, ['required'],
            'notas' =>$request->notas, ['required'],
            'user_id'=>$request->user_id, ['required'],
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at,
        ]);
        return $client;
    }
    public function Delete($id){
        $client = Client::find($id); 
        $client->delete();
        return $client;
    }
    public function Update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->name=$request->name;
        $client->email=$request->email;
        $client->identificador_fiscal=$request->identificador_fiscal;
        $client->telefono=$request->telefono;
        $client->calle=$request->calle;
        $client->numero=$request->numero;
        $client->colonia=$request->colonia;
        $client->codigo_postal=$request->codigo_postal;
        $client->ciudad=$request->ciudad;
        $client->estado=$request->estado;
        $client->pais=$request->pais;
        $client->notas=$request->notas;
        $client->user_id=$request->user_id;
        $client->save();
        return $client;
    }
    public function Read(){
        $client = Client::all();
        return $client;
    }
}
