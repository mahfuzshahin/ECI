<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
// use Request;
use Auth;
class AdminLoginController extends Controller
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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function ShowLoginForm()
    {
        return view('admin-auth.login');
    }

    public function LoginActive(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        
        $crediantial = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // dd(Auth::guard());
        if(Auth::guard('admin')->attempt($crediantial,$request->remember) ) 
        {
            return redirect(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
        
    }
}
