<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChestController extends Controller
{
    public function showChestForm()
    {
        return view('website.upload.uploadChest');
    }
}
