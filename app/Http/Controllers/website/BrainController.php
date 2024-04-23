<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrainController extends Controller
{
    public function showBrainForm()
    {
        return view('website.uploadBrain');
    }
}
