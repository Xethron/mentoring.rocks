<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function view(Request $request)
    {
        $user = auth()->user();
        return view('profile.view', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->bio = $request->bio;
        $user->country = $request->country;

        $user->save();

        return redirect()->route('profile.view');
    }
}
