<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Model
use App\Models\Admin\Department;
use App\Admin;
use App\Application;
use App\MphilApplication;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /* $data['departmentList']  = $this->paginateArray(
            DB::select("SELECT
                d.id,
                d.name,
                d.short_name,
                Dcoount
                FROM departments AS d
                LEFT JOIN (SELECT
                            department_id,
                            COUNT(department_id) AS Dcoount
                            FROM applications WHERE status !=0
                            GROUP BY department_id) AS a
                    ON (a.department_id = d.id)
            ")); */

        //return view('admin.dashboard')->with($data);
        return view('admin.dashboard');
    }
    public function submitted_phd_application(){
        $phd_apps = Application::all();
        return view('admin.phd.submitted_phd_app',compact('phd_apps'));
    }
    public function submitted_phd_application_details($id){
        $phd_app_details = Application::find($id);
        return view('admin.phd.submitted_phd_app_details',compact('phd_app_details','id'));
    }

    public function submitted_mphil_application(){
        $mphil_apps = MphilApplication::all();
        return view('admin.mphil.submitted_mphil_app',compact('mphil_apps'));
    }
    public function submitted_mphil_application_details($id){
        $mphil_app_details = MphilApplication::find($id);
        return view('admin.mphil.submitted_mphil_app_details',compact('mphil_app_details','id'));
    }


    /*
    |-------------------------------------------------
    | Result Dashboard
    |-------------------------------------------------
    */
    public function ResultDashboard()
    {

        /* $data['departmentList']  = $this->paginateArray(
            DB::select("SELECT
                d.id,
                d.name,
                d.short_name,
                Dcoount
                FROM departments AS d
                LEFT JOIN (SELECT
                            department_id,
                            COUNT(department_id) AS Dcoount
                            FROM applications WHERE degree =2
                            GROUP BY department_id) AS a
                    ON (a.department_id = d.id)
            ")); */

        return view('admin.result-dashboard')->with($data);
    }


    public function paginateArray($data, $perPage = 6)
        {
            $page = Paginator::resolveCurrentPage();
            $total = count($data);
            $results = array_slice($data, ($page-1) * $perPage, $perPage);
            return new LengthAwarePaginator($results, $total, $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
            ]);
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

        $admin = Admin::find(auth()->user()->id);

        if (!Hash::check($request->old_password, $admin->password)) {
            return redirect()->back()->with('FlsMsgEr', "Current password does not match");
        }

        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->back()->with('FlsMsg', "You have successfully changed your password");
    }
}
