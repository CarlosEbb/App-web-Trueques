<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectToAdmin = '/home';
    protected $redirectToUser = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(Request $request)
    {
        if ($request->has('redirect_to')) {
            //Session::flash('redirect_to',url()->current());
            session()->put('redirect_to', $request->input('redirect_to'));
        }

        if(auth()->check()){
            return back();
        }else{
            return view('auth.login');
        }
        
    }

    public function redirectTo()
    {
        if (session()->has('redirect_to')){
            return session()->pull('redirect_to');
        }
        
        if(Auth::user()->rol_id == 1){
            return $this->redirectToAdmin;
        }else{
            return $this->redirectToUser;
        }
    }
}
