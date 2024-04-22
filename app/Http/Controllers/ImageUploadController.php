<?php

namespace App\Http\Controllers;

use App\Models\imageUpload;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class ImageUploadController extends Controller
{
    public function uploadImg(Request $request){
        // $request->validate([
        //     // lal validation
        // 'myfile'=>'required|mimes:png'
        // ]);

        $path = $request->file('myfile')->store('public/myImages');
        $path_to_store = Str::replace('public', 'storage', $path);

           
                // $path =  $request->file('myfile')->store('public/images');
                // $replaced = Str::replace('public', 'storage', $path);
        
                $obj = new imageUpload();
                $obj->name=$request->file('myfile')->getClientOriginalName();
                $obj->path= $path_to_store;
                $obj->save();
        
        
                return 'ok';
            
            
        // return redirect()->route('displayImage');
    }

    // public function getImg(){
    //     $obj = imageUpload::find(7);
    //     return view('displayImg')->with('obj', $obj);
    // }

    public function getImg(){
        $obj = imageUpload::find(3);
        return view('displayImg')->with('obj',$obj);
    }

    
}


