<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->objLogin->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

    }
        public function create()
        {
            return view ('cadastrar');
        }
    }
