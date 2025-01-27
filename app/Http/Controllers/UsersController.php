<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validação
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // "confirmed" verifica o campo password_confirmation
        ]);

        // Criação do usuário
        $validated['password'] = Hash::make($validated['password']); // Criptografar a senha
        $user = User::create($validated);

        // Autenticar o usuário
        Auth::login($user);

        // Redirecionar para a rota desejada
        return to_route('series.index');
    }


}
