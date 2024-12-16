<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validation des données du formulaire
        $credentials = $request->validate([
            'matricule' => 'required|string',
            'password' => 'required|string',
        ], [
            'matricule.required' => 'Le champ Matricule est obligatoire.',
            'password.required' => 'Le champ Mot de passe est obligatoire.',
        ]);

        // Tentative de connexion de l'utilisateur
        if (Auth::attempt($credentials)) {
            // Authentication successful, retrieve user data
            $user = Auth::user();

            // Check user's status and role, and redirect accordingly
            if ($user->etat == 'new') {
                $user->save;
                session(['matricule' => $user->matricule]);
                session(['role' => $user->role]);

                return redirect()->route('createpsw'); // Redirect to createpassword.blade.php
            } elseif ($user->etat == 'active') {
                // Store user's matricule in session
                session(['matricule' => $user->matricule]);
                session(['role' => $user->role]);
                return redirect()->route('dashboard');

            } elseif ($user->etat == 'active') {

                // Store user's matricule in session
                session(['matricule' => $user->matricule]);
                session(['role' => $user->role]);
                // Redirect to dashboard
                return redirect()->route('dashboard');
            } elseif ($user->etat == 'inactive') {
                return redirect()->back()->withErrors(['compte desactiver']);
            }
        }

        // Authentication failed, redirect back with error message
        return redirect()->back()->withErrors(['Matricule ou mot de passe invalide. Veuillez réessayer.']);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
