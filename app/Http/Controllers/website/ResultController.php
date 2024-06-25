<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelDescription; // Include your model

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
// In ResultController
    public function index()
    {
        if (!session()->has('resultData')) {
            return redirect('/'); // Redirect to a default page if no data is available
        }

        $result = session('resultData');
        $type = session('type');
        $uploadedImageUrl = session('uploadedImageUrl');
        // Fetch the description from the database
        $description = ModelDescription::where('type', $type)
                                       ->where('class_name', $result['data']['class'])
                                       ->first();
        return view('website.result', compact('result', 'type', 'uploadedImageUrl','description'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
