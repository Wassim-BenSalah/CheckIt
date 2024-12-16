<?php
namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
class CreatePasswordController extends Controller
{
    public function index()
    {
        return view('createpassword');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'password' => 'required|min:6', // Validate only the password as matricule is from the session
        ]);

        // Retrieve the matricule from the session
        $matricule = session('matricule');

        // Find the user by matricule
        $user = Utilisateurs::where('matricule', $matricule)->first();

        // If user not found, handle it accordingly
        if (!$user) {
            return redirect()->back()->withErrors(['User not found.']);
        }

        // Update the user's password
        $user->password = bcrypt($request->input('password'));

        // Set the user's state to 'active'
        $user->etat = 'active';

        // Save the updated user
        $user->save();

        // Redirect the user to a success page or any other appropriate action
        return redirect()->route('dashboard')->with('success', 'Password updated successfully!');
    }

}
