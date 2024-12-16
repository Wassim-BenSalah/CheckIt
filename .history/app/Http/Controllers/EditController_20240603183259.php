<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreated;
use App\Models\Utilisateurs;
use Illuminate\Support\Str;



class EditController extends Controller
{
    public function index()
    {

            // Retrieve all users from the database
            $users = Utilisateurs::all();

            // Pass the $users and $matricule variables to the edit view
            return view('admin.edit', ['users' => $users]);

    }
    public function toggleUser(Request $request, $matricule)
    {
        // Find the user by matricule
        $user = Utilisateurs::where('matricule', $matricule)->first();

        // Toggle the user's state
        if ($user) {
            $user->etat = $user->etat === 'active' ? 'inactive' : 'active';
            $user->save();
        }

        // Redirect back or to any desired route
        return redirect()->back()->with('success', "État de l'utilisateur changé avec succès.");
    }



    public function update(Request $request, $matricule)
    {
        $matricule = $request->input('matricule');

        $user = Utilisateurs::where('matricule', $matricule)->firstOrFail();

        // Validate the request data
        $request->validate([
            'email' => 'nullable|email',

            'role' => 'nullable|in:admin,technicien',
        ]);

        // Update user attributes only if provided in the request
        if ($request->has('email')) {
            $user->email = $request->email;
        }


        if ($request->has('role')) {
            $user->role = $request->role;
        }

        // Save the updated user
        $user->save();

        return response()->json(['success' => true, 'message' => 'Utilisateur mis à jour avec succès.']);
    }

    public function register(Request $request)
    {
        // Validate registration form data
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => ['required', 'unique:utilisateurs', 'regex:/^\d{8}$/'],
            'email' => 'required|email|unique:utilisateurs,email',
            'role' => 'required|in:admin,technicien',
        ], [
            'required' => 'Le champ :attribute est vide.',
            'matricule.unique' => 'Le matricule est déjà utilisé',
            'matricule.regex' => 'Le matricule doit être composé de 8 chiffres.',
            'email.unique' => "L'adresse e-mail est déjà utilisée.",

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $password = Str::random(6);


        // Create new user
        $user = new Utilisateurs();
        $user->matricule = $request->matricule;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->role = $request->role;
        $user->etat = 'new';
        $user->save();
        $matricule=$request->matricule;
        // Envoyer un e-mail à l'utilisateur
         Mail::to($request->email)->send(new UserCreated($user, $password,$matricule)); // Passez le mot de passe non haché à la classe UserCreated

        return response()->json(['success' => true, 'message' => 'Utilisateur créé avec succès.']);
    }

}
