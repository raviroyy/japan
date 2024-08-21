<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AuthenticateUser;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
       return view('hero');
    }
}
