<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register.index');
    }

    public function register(Request $request)
    {
        $item = $request->validate([
            'name' => 'required|max:255', 
            'username' => 'required', 
            'email' => 'required|email:dns', 
            'password' => 'required'
        ]);
        $item["password"] = bcrypt($item["password"]);

        User::create($item);
        return redirect('login');
    }
}
