<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Routing\Controller;
use \Request;

class AuthController extends Controller {

    public function login()
    {
        return view("index");
    }
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => Request::input("email"), 'password' => Request::input("password")]))
        {
            return redirect()->intended('admin');
        } else {
            return redirect()->intended('');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('');
    }

}
