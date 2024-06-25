<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\FileUploadService; // Ensure the service is included

class ChestController extends Controller
{
    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }


    public function predictChest(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg'
        ]);
    
        $uploadedImageUrl = $this->fileUploadService->uploadAndStore($request, 'chest');
        $flaskApiUrl = env('FLASK_API_URL') . 'predict/covid19';
        $file = $request->file('file');
        $response = Http::attach(
            'file', file_get_contents($file), $file->getClientOriginalName()
        )->post($flaskApiUrl);
    
        if ($response->successful()) {
            $result = $response->json();
            // Store result in session or cache
            session(['resultData' => $result, 'type' => 'chest', 'uploadedImageUrl' => $uploadedImageUrl]);
            return redirect()->action([ResultController::class, 'index']);
        } else {
            return back()->with('error', 'Error calling Flask API');
        }
    }
    
}
