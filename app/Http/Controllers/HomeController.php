<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $name = 'Rico Muhammad';
        $email = 'rico@leolitgames.com';
        $image = 'https://avatars.githubusercontent.com/u/76117803?v=4';
        $age = 20;

        return view('about', compact('name', 'email', 'image', 'age'));
    }
}
