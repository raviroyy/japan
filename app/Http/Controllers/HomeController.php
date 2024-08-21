<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\AdminController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user = Auth::user(); // Get the authenticated user
    
        // Check if the user is an admin
        if ($user->usertype ==='admin') {
            return redirect()->route('admin.home');
        } 
        else 
        {
            return redirect()->route('user.home'); // Ensure this is the correct route for normal users
        }
    }
    
    
}
