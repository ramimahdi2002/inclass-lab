<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function testing(){
        return "hello, I am index function";
    }

    public function testingParameter($id){

        return "ID: " . $id;
    }

    public function returnJson(){
        return response()->json([
            "name"=>"nehme", 
            "age"=> "23"
        ]);
    }
}
