<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register',[
            'title' => 'Register'
        ]);
    }
    public function store(Request $request) 
    {
        $validatedata = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'name' => 'required|max:255',
            'vendor' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'role' => 'required|in:vendor,ar_team,fleet,finance,super_admin' 
        ]);

        $validatedata['password'] = Hash::make($validatedata['password']);

        User::create($validatedata);

        $request->session()->flash('success', 'Registration successful! Please login');
        
        return redirect('/');

    }
}
