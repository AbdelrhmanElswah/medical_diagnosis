<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelDescription;
use App\Models\ModelImage;
use App\Models\UserHistory;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!session()->has('resultData')) {
            return redirect('/'); // Redirect to a default page if no data is available
        }

        $result = session('resultData');
        $type = session('type');
        $uploadedImageUrl = session('uploadedImageUrl');
        $formattedClassName = $this->formatClassName($result['data']['class']);

        // Fetch the description from the database
        $description = ModelDescription::where('type', $type)
                                       ->where('class_name', $result['data']['class'])
                                       ->first();

        // Save the user history
        $this->saveUserHistory($result, $type, $description);

        return view('website.result', compact('result', 'type', 'uploadedImageUrl', 'description','formattedClassName'));
    }

    /**
     * Save user history.
     */
    private function saveUserHistory($result, $type, $description)
    {
        if (!Auth::check()) {
            return; // User is not logged in
        }

        $userId = Auth::id();
        $imagePath = session('uploadedImageUrl'); // Assuming this is the path to the uploaded image

        // Create or find the ModelImage
        $modelImage = ModelImage::firstOrCreate(
            ['image_path' => $imagePath],
            ['user_id' => $userId, 'model_type' => $type, 'name' => $result['data']['class']]
        );

        // Save the user history
        UserHistory::create([
            'user_id' => $userId,
            'model_image_id' => $modelImage->id,
            'model_description_id' => $description->id,
            'category' => $type,
            'date' => now(),
            'result' => $result['data']['class'],
        ]);
    }

}
