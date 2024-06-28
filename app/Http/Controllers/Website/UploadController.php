<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showForm($type = 'brain')
    {
        // Assuming the $type variable comes from the route indicating model type
        $data = [
            'brain' => [
                'title' => 'Brain Tumor Detection',
                'action' => route('predict.brain'),
                'requirements' => 'Image should be at least 150 x 150 pixels.',
                'warning' => 'Ensure the scan is clear to avoid incorrect diagnosis.'
            ],
            'chest' => [
                'title' => 'Chest Disease Detection',
                'action' => route('predict.chest'),
                'requirements' => 'Image should be at least 224 x 224 pixels.',
                'warning' => 'Low-quality images may lead to inaccurate results.'
            ],
            'eye' => [
                'title' => 'Eye Disease Diagnosis',
                'action' => route('predict.eye'),
                'requirements' => 'Use high-resolution images for better accuracy.',
                'warning' => 'Please ensure the entire eye is visible in the scan.'
            ]
        ][$type];

        return view('website.upload', $data);
    }
}
