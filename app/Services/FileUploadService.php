<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\ModelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadService
{
    public function uploadAndStore(Request $request, $modelType)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('file');
        $customDirectory = 'website/upload';

        // Generate a unique file name
        $name = $this->generateFileName($file, $modelType);
        $path = $file->storeAs($customDirectory, $name, 'public');
        $uploadedImageUrl = asset('storage/' . $path);
        // Store file data in the database
        $userId = Auth::id(); // null if not logged in
        ModelImage::create([
            'user_id' => $userId,
            'image_path' => $uploadedImageUrl,
            'name' => $name,
            'model_type' => $modelType,
        ]);

        return $uploadedImageUrl;
    }

    private function generateFileName($file, $modelType)
    {
        $extension = $file->getClientOriginalExtension();
        $datePrefix = now()->format('YmdHis');
        return "{$modelType}_{$datePrefix}.{$extension}";
    }
}
