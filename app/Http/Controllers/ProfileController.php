<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Import the User model
use App\Http\Requests\UpdateProfileRequest;// request form validation done for profilrcontroller

class ProfileController extends Controller
{
    // Method to show the user's profile without specific user data
    public function index()
    {

        $user = Auth::user(); // Assuming the user is authenticated
        return view('user.profile', ['user' => $user]); // Pass the user to the view
    }

    // Method to show a specific user's profile based on their ID

    // Method to update the user's profile
    public function profile(UpdateProfileRequest $request)
    {
            $user = Auth::user();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->email = $request->email;

            $user->save; // Save the updated user information

            return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');


        return view('user.profile');
    }
   public function delete()
{
    $user=Auth::user();//check the authorigation

    if ($user) {
        $user->delete; // Delete the user
        Auth::logout(); // the user will be loggedout after entering the delete butrton
        return redirect('login')->with('success', 'Profile deleted successfully.');
    }
    else
    {
        return redirect()->back()->with('error', 'User not found.');
    }
}

}
