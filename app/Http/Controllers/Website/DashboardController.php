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
    
        // Fetch only the latest 3 entries for the dashboard
        $historyData = $this->getUserHistoryData(3);
         
        $historyChart=$this->getUserHistoryData();
        // Count the number of positive and negative checkups
        $positiveCheckups = 0;
        $negativeCheckups = 0;
        foreach ($historyChart as $data) {
            if ($data->result !== 'normal') {
                $negativeCheckups++;
            } else {
                $positiveCheckups++;
            }
        }
    
        // Prepare chart data based on detection status
        $chartData = [
            ['Task', 'Check'],
            ['Positive Checkup', $positiveCheckups],
            ['Negative Checkup', $negativeCheckups],
        ];
    
        return view('dashboard.index', compact('historyData', 'user', 'chartData'));
    }
    

    public function showContact()
    {
        return view('dashboard.contactus');
    }

    public function history()
    {
        // Fetch all history data
        $historyData = $this->getUserHistoryData();

        return view('dashboard.history', compact('historyData'));
    }

    protected function getUserHistoryData($limit = null)
    {
        $userId = Auth::id();

        $query = UserHistory::where('user_histories.user_id', $userId)
            ->join('model_images', 'user_histories.model_image_id', '=', 'model_images.id')
            ->join('model_descriptions', 'user_histories.model_description_id', '=', 'model_descriptions.id')
            ->select('user_histories.category', 'user_histories.date', 'user_histories.result')
            ->orderBy('user_histories.date', 'desc');

        if ($limit !== null) {
            $query->take($limit);
        }

        return $query->get();
    }
}

