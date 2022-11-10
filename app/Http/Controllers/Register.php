<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=>'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        Register::create($request->except(['_token']));
        return redirect('/login');
    }

    public function create()
    {
        return view('login.index');
    }
}
