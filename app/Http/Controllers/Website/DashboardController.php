<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserHistory;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function history()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Fetch user-specific history data
        $historyData = UserHistory::where('user_histories.user_id', $userId)
            ->join('model_images', 'user_histories.model_image_id', '=', 'model_images.id')
            ->join('model_descriptions', 'user_histories.model_description_id', '=', 'model_descriptions.id')
            ->select('user_histories.category', 'user_histories.date', 'user_histories.result')
            ->orderBy('user_histories.date', 'desc')
            ->get();

        // Pass the data to the view
        return view('website.history', compact('historyData'));
    }
}
