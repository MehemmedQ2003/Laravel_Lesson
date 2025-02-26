<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request){
        dd($request->all());
    }

    public function updateAll(Request $request){
        dd($request->all());
    }

    public function delete(Request $request){
        dd("Deleted USer id: " . $request->id);
    }

    public function show(Request $request){
        dd("Show User id: " . $request->id);
    }

    public function showName(Request $request){
        dd("Show User name: " . $request->name);
    }

    public function roleCheck($role){
        dd("Show role name: " . $role);
    }
}
