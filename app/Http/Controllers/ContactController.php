<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm(){
        return view("front.contact");
    }
    public function contact(Request $request){
        // dd($request->fullname);
        dd($request->all());
    }

    public function user(Request $request, int $id, string $name = null){
        // dd(gettype($id));
        // dd($request->id);
        // dd($request->name);
        dd($request->all());
    }
}
