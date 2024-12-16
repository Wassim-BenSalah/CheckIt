<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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
}
