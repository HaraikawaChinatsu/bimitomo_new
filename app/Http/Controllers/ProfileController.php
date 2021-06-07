<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }
}
