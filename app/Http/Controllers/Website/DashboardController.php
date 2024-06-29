<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserHistory;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showDash()
    {
        $user = Auth::user();

        $historyData = $this->getUserHistoryData();
        
        return view('website.dashboard', compact('historyData','user'));
    }

    public function showContact()
    {  
       
        
        return view('website.contactus');
    }


    public function history()
    {
        $historyData = $this->getUserHistoryData();

        return view('website.history', compact('historyData'));
    }


    protected function getUserHistoryData()
    {
        $userId = Auth::id();

        return UserHistory::where('user_histories.user_id', $userId)
            ->join('model_images', 'user_histories.model_image_id', '=', 'model_images.id')
            ->join('model_descriptions', 'user_histories.model_description_id', '=', 'model_descriptions.id')
            ->select('user_histories.category', 'user_histories.date', 'user_histories.result')
            ->orderBy('user_histories.date', 'desc')
            ->get();
    }

    


    
}
