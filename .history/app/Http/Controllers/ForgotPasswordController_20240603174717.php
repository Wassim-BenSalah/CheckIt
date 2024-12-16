<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Models\Utilisateurs;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Str;
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
    public function sendResetLinkEmail(Request $request)
    {
        // Validate the email address
        $request->validate(['email' => 'required|email']);
        $email = $request->email;
        $user = Utilisateurs::where('email',$email)->firstOrFail();
        $password = Str::random(6);
        $user->password = bcrypt($request->password);

        // Send the password reset email
        Mail::to($request->email)->send(new ResetPassword($user, $password,$user->matricule));
    }
}
