<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    public function index(){
        $age = 20;
        $name = "Muhammad";
        // return view("front.index")->with(["age" => $age, "name" => $name]);

        $person = new stdClass();
        $person->age = $age;
        $person->name = $name;
        return view("front.index", compact('person'));
    }
    public function about(){
        return view('front.about');
    }
    public function service(){
        return view('front.service');
    }
}
