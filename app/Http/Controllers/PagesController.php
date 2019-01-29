<?php

namespace App\Http\Controllers;
use Auth;
use App\User;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return view('layout.home', compact('user'));
    }
}
