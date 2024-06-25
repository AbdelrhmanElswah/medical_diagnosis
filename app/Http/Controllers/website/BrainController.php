<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class BrainController extends Controller
{
    public function showBrainForm()
    {
        return view('website.upload.uploadBrain');
    }

    public function predictBrain(Request $request){
            
        $request->validate([
            'file'=>'required|file|mimes:jpeg,png,jpg',
        ]);
        
        $file=$request->file('file');

        $customDirectory = 'website/upload'; 

        $path = $file->store($customDirectory, 'public');
    
        $uploadedImageUrl = asset('storage/' . $path);


        $response = Http::attach(
            'file',file_get_contents($file),$file->getClientOriginalName()
        )->post('http://127.0.0.1:5000/predict/brain_tumor');

        if($response->successful()){
            $result = $response->json();
            return view('website.result',compact('result', 'uploadedImageUrl'));
        }
        else{
            return back()->with('error', 'Error calling Flask API');
        }

    }


    
}
