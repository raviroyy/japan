<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
   public function index()
    {
         //Check if the user is authenticated
    $user=Auth::user();
        if($user->usertype=='admin')
        {
            return view('admin.home');
        }
        else
        {
            return redirect('hero');
        }
    }
 
}

