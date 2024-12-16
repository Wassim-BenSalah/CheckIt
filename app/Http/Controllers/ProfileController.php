<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        // Assuming you have the user's matricule stored in session
        $matricule = session('matricule');

        // Fetch user data from the database
        $user = DB::table('Utilisateurs')->where('matricule', $matricule)->first();
        if (session('role')=='admin')
            return view('admin.profile', [
                'matricule' => $user->matricule,
                'nom' => $user->nom,
                'prenom' => $user->prenom,
                'email' => $user->email,
                'role' => $user->role,
            ]);
        else
            return view('technicien.profile', [
                'matricule' => $user->matricule,
                'nom' => $user->nom,
                'prenom' => $user->prenom,
                'email' => $user->email,
                'role' => $user->role,
            ]);
    
        

        // Pass user data to the view
     
    }

    public function fetchProfileData()
    {
        // Fetch updated user data from the database
        $matricule = session('matricule');
        $user = DB::table('Utilisateurs')->where('matricule', $matricule)->first();

        // Return the updated profile data as JSON
        return response()->json([
            'matricule' => $user->matricule,
            'nom' => $user->nom,
            'prenom' => $user->prenom,
            'email' => $user->email,
            'role' => $user->role,
        ]);
    }
}
