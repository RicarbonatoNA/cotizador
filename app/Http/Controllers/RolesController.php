<?php

namespace App\Models\RoleModel;
namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function Create(Request $request)
    {
        $role = Role::create([
            'id' =>$request->id, 
            'name' =>$request->name,
            'created_at' =>$request->created_at,
            'updated_at' =>$request->updated_at
        ]);
        return $role;
    }
    public function Delete($id){
        $role = Role::find($id); 
        $role->delete();
        return $role;
    }
    public function Update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name=$request->name;
        $role->save();
        return $role;
    }
    public function Read(){
        $role = Role::all();
        return $role;
    }
}
