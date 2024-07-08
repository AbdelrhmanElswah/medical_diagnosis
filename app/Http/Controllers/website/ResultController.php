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

        // Generate the doctor URL based on the type
        $doctorUrl = $this->generateDoctorUrl($type);

        return view('website.result', compact('result', 'type', 'uploadedImageUrl', 'description', 'formattedClassName', 'doctorUrl'));
    }

    /**
     * Fetch cities with pagination.
     */
    public function getCities(Request $request)
    {
        $cities = [
            'portsaid' => 'Portsaid',
            'cairo' => 'Cairo',
            'giza' => 'Giza',
            'alexandria' => 'Alexandria',
            'north-coast' => 'North Coast',
            'qalyubia' => 'Qalyubia',
            'gharbia' => 'Gharbia',
            'menoufia' => 'Menoufia',
            'fayoum' => 'Fayoum',
            'el-dakahlia' => 'El-Dakahlia',
            'el-sharqia' => 'El-Sharqia',
            'el-beheira' => 'El-Beheira',
            'damietta' => 'Damietta',
            'matrouh' => 'Matrouh',
            'assiut' => 'Assiut',
            'el-ismailia' => 'El-Ismailia',
            'hurghada' => 'Hurghada',
            'sharm-el-sheikh' => 'Sharm El Sheikh',
            'suez' => 'Suez',
            'sohag' => 'Sohag',
            'el-minia' => 'El-Minia',
            'kafr-el-sheikh' => 'Kafr El Sheikh',
            'luxor' => 'Luxor',
            'qena' => 'Qena',
            'aswan' => 'Aswan',
            'beni-suef' => 'Beni Suef',
        ];

        $search = $request->input('search');
        $citiesFiltered = array_filter($cities, function ($city) use ($search) {
            return stripos($city, $search) !== false;
        });

        $perPage = 8;
        $currentPage = $request->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;
        $paginatedCities = array_slice($citiesFiltered, $offset, $perPage);
        $total = count($citiesFiltered);

        return response()->json([
            'cities' => $paginatedCities,
            'total' => $total,
            'currentPage' => $currentPage,
            'perPage' => $perPage,
        ]);
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

    /**
     * Format the class name.
     */
    private function formatClassName($className)
    {
        // Replace all underscores with spaces
        $className = str_replace('_', ' ', $className);
        // Capitalize the first letter of each word
        $className = ucwords(strtolower($className));
    
        return $className;
    }

    /**
     * Generate the doctor URL based on the type.
     */
    private function generateDoctorUrl($type)
    {
        switch ($type) {
            case 'chest':
                return 'https://www.vezeeta.com/en/doctor/chest/egypt';
            case 'eye':
                return 'https://www.vezeeta.com/en/doctor/ophthalmology/egypt';
            case 'brain':
                return 'https://www.vezeeta.com/en/doctor/neurology/portsaid';
            default:
                return 'https://www.vezeeta.com/en/doctor/portsaid';
        }
    }
}
