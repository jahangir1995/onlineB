<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
use App\Admin;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.login');
    }
    public function show_dashboard(){
        return view('admin.layout');

    }
    public function admin_dashboard(Request $request){

        $email = $request->admin_email;
        $password = $request->admin_password;
        $result = DB::table('admins')
        ->where('admin_email',$email )
        ->where('admin_pass',$password)
        ->first();

        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message','Email or Password Invalid');
            return Redirect::to('/admin');
        }
    }
    public function admin_show(){
        $admin_info = Admin::all();
        return view('admin.admin',compact('admin_info'));

    }
    
    
}

