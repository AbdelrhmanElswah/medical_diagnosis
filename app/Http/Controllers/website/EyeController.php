<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EyeController extends Controller
{
    private $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }
    public function predictEye(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg'
        ]);

        $uploadedImageUrl = $this->fileUploadService->uploadAndStore($request, 'eye');
        $flaskApiUrl = env('FLASK_API_URL') . 'predict/eye';
        $file = $request->file('file');
        $response = Http::attach(
            'file',
            file_get_contents($file),
            $file->getClientOriginalName()
        )->post($flaskApiUrl);
        session()->forget('prediction');

        if ($response->successful()) {
            $result = $response->json();
            session([
                'prediction' => [
                    'resultData' => $result,
                    'type' => 'eye',
                    'uploadedImageUrl' => $uploadedImageUrl
                ]
            ]);
            return redirect()->action([ResultController::class, 'index']);
        } else {
            return back()->with('error', 'Error calling Flask API');
        }
    }
}
