<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Models\Utilisateurs;
use Illuminate\Support\Str;
use App\Mail\ResetPassword;

class ForgotPasswordController extends Controller
{
    /**
     * Show the form for requesting a password reset.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('ForgotPassword');
    }

    /**
     * Handle sending the password reset email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        // Validate the email address
        $request->validate(['email' => 'required|email']);
        $email = $request->email;

        // Check if the user exists
        $user = Utilisateurs::where('email', $email)->firstOrFail();
        $password = Str::random(6);
        $user->password = bcrypt($password);
        $user->etat = 'new';

        // Save the new password
        $user->save();

        // Send the password reset email
        Mail::to($request->email)->send(new ResetPassword($user, $password, $user->matricule));

        return back()->with('status', 'We have emailed your password reset link!');
    }
}
