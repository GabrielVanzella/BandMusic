<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Informe seu email',
            'email.email' => 'Este email não é valido',
            'password.required' => 'Informe sua senha',
        ]);

        $credentials = $request->only('email', 'password');
        $authenticated =  Auth::attempt($credentials);

        if (!$authenticated) {
            return redirect()->route('login.index')->withErrors(['error' => 'Email ou senha incorreto']);
        }
        return redirect()->route('home.index')->with('success', 'logado com sucesso');

        $this->objLogin->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }

    public function destroy()
    {
        Auth::Logout();
        return redirect()->route('login.index');
    }


}
