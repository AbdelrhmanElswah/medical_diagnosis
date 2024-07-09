<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\FileUploadService; // Make sure to include the FileUploadService

class BrainController extends Controller
{
    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }


// In BrainController
    public function predictBrain(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg',
        ]);

        $uploadedImageUrl = $this->fileUploadService->uploadAndStore($request, 'brain');
        $flaskApiUrl = env('FLASK_API_URL') . 'predict/brain_tumor';
        $file = $request->file('file');
        $response = Http::attach(
            'file', file_get_contents($file), $file->getClientOriginalName()
        )->post($flaskApiUrl);
        session()->forget('prediction');

        if ($response->successful()) {
            $result = $response->json();
            // Store result in session or cache
            session([
                'prediction' => [
                    'resultData' => $result,
                    'type' => 'brain',
                    'uploadedImageUrl' => $uploadedImageUrl
                ]
            ]);
            return redirect()->action([ResultController::class, 'index']);
        } else {
            return back()->with('error', 'Error calling Flask API');
        }
    }
}
