<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class categories extends Controller
{
    public function method1(){
        $obj = new Category();
        $obj->name = "Product 2";
        $obj->description = "This is my description";
        $obj->in_stock = true;
        $obj->expiry_date = "2024-03-2";
        $obj->save();
    }

    public function method2(){
        
 
        Category::create([
            'name'=> "Product from method 2",
            'description'=> "description from method 2",
            'in_stock'=>1,
            'expiry_date'=>"2020-06-03"
        ]);
 
    }

    public function method3(Request $request){
        Category::create($request->all());
        return "done";
    }

    public function retrieve(){
        $obj = Category::find(1);
        return $obj;
    }

    //retrieve by condition
    public function retrieveByCondition(){
        $obj = Category::where('name', 'esma')->get(); //select maa condition
        return $obj;
    }

    public function updateById($id){
        $obj =  Category::find($id);
        $obj->name = "Product 9999999";
        $obj->description = "This is my description";
        $obj->in_stock = true;
        $obj->expiry_date = "2024-03-2";
        $obj->save();
        return "updated";
    }
    public function updateMass(){
        Category::where('name', 'Product 9999999')->update([
            'name'=> "esfefesf",
        ]);
    }

    public function deleteById($id){
        $obj =  Category::find($id);
        $obj->delete();
    }

    public function deleteMass(){
        Category::where('name', 'esfefesf')->delete();
    }


    
}
