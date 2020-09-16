<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\Admin;
use App\uSER;
use Illuminate\Http\Request;
use App\Models\Admin\DepartmentUser;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth:admin', 'auth:department']);
        // return auth()->user();
    }


    /*
    |-------------------------------------------------
    | Update your password
    |-------------------------------------------------
    */

    public function ChangeAdminPassword(Request $request)
    {
        $this->validate($request, [
            'old_password'   => 'required',
            'new_password' => 'required'
        ]);
        
        if (Auth::guard('admin')->check()) {
            $admin = Admin::find(auth('admin')->user()->id);
        }
        /* elseif (Auth::guard('department')->check()) {
            $admin = DepartmentUser::find(auth( 'department')->user()->id);
        } */
       

        if (!Hash::check($request->old_password, $admin->password)) {
            return redirect()->back()->with('FlsMsgEr', "Current password does not match");
        }

        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->back()->with('FlsMsg', "You have successfully changed your password");
    }
}
