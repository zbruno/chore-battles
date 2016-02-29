<?php namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Show the welcome screen.
     *
     */
    public function welcome()
    {
        return view('guest.welcome');
    }
}
