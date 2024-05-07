<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EyeController extends Controller
{
    public function showEyeForm()
    {
        return view('website.upload.uploadEye');
    }
}
