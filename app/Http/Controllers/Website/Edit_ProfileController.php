<?php
namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Edit_ProfileController extends Controller
{
    public function showEdit()
    {
        $user = Auth::user();
        return view('website.editprofile', compact('user'));
    }

    public function showSecurity()
    {
        return view('website.security');
    }

   public function update(Request $request)
{
    $request->validate([
        'name' => 'nullable|string|max:255|unique:users,name,' . Auth::id(),
        'first_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'blood_type' => 'nullable|string|max:3',
        'location' => 'nullable|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        'phone' => 'nullable|string|max:20',
        'birthday' => 'nullable|date_format:m/d/Y',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
    ]);

    $user = Auth::user();
    $user->name = $request->input('name');
    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->blood_type = $request->input('blood_type');
    $user->location = $request->input('location');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');

    // Convert the birthday to the correct format
    if ($request->has('birthday')) {
        $user->birthday = Carbon::createFromFormat('m/d/Y', $request->input('birthday'))->format('Y-m-d');
    }

    // Handle profile picture upload
    if ($request->hasFile('profile_picture')) {
        // Delete the old profile picture if it exists
        if ($user->profile_picture) {
            Storage::disk('public')->delete($user->profile_picture);
        }
        $imagePath = $request->file('profile_picture')->store('website/profile_pictures', 'public');
        $user->profile_picture = $imagePath;
    }

    $user->save();

    if ($request->hasFile('profile_picture')) {
        return response()->json([
            'success' => true,
            'profile_picture_url' => asset('storage/' . $user->profile_picture)
        ]);
    }

    return redirect()->route('edit.profile')->with('success', 'Profile updated successfully.');
}

public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect']);
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return back()->with('success', 'Password changed successfully.');
    }

    public function deleteAccount(Request $request)
    {
        $user = Auth::user();
        Auth::logout();

        $user->delete();

        return redirect('/')->with('success', 'Account deleted successfully.');
    }
}
