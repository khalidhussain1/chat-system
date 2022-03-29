<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo()
    {


        if (Auth()->user()->role == 'admin') {
            return redirect('admin.index');
        } else if (Auth()->user()->role == 'user') {
            return redirect('user.index');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
      
     
    //    $role=$request->role;
  
        $input = $request->all();
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } elseif (auth()->user()->role == 'designer') {
                return redirect()->route('designer.index');
            }
            elseif (auth()->user()->role == 'employe') {
                return redirect()->route('employee.index');
            }
            elseif (auth()->user()->role == 'client') {
                return redirect()->route('client.index');
            }
            
        } else {
            Auth::logout();
            return redirect()->route('login')->with('error','Credentials Are not Right');
        }
    }
}
