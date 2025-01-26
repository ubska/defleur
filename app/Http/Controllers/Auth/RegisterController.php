<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Mostra il modulo di registrazione.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');  // Mostra il form di registrazione
    }

    /**
     * Gestisce la registrazione di un nuovo utente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Valida i dati di registrazione
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Assicurati che la password sia confermata
        ]);

        // Crea un nuovo utente
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // La password deve essere criptata
        ]);

        // Autentica l'utente appena registrato
        Auth::login($user);

        // Reindirizza l'utente alla home page dopo la registrazione
        return redirect()->route('home');
    }
}
