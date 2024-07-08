<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showHome()
    {
        $reviews = Review::orderBy('rating', 'desc')->take(5)->get();
        return view('website.home', compact('reviews'));
    }
    public function submitReview(Request $request)
    {
        $request->validate([
            'review' => 'required|string|max:255',
            'role' => 'required|string|max:100',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'name' => Auth::user()->name,
            'role' => $request->input('role'),
            'review' => $request->input('review'),
            'rating' => $request->input('rating'),
        ]);

        return response()->json(['message' => 'Review submitted successfully.']);
    }
}
