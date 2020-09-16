<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('auth:user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function changePassword(){
        return view('auth.passwords.change');    
    }

    public function change(Request $request){


        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($request['password'] != $request['password_confirmation']){
            return redirect()->route('change.password')->with('warning','Your given password is not same!');
        }else{
            $password = User::find(Auth::user()->id);
            $password->password = Hash::make($request['password']);
            $password->save();
            return redirect()->route('change.password')->with('success','Your password changed!');
        }
    }
}
