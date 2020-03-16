<?php

namespace App\Http\Controllers;

use App\RegisterUser;
use DB;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use Session;

session_start();

class UserControllerController extends Controller
{
    public function userRegister()
    {
        return view('user.userRegister');
    }
    public function save_register(Request $request)
    {
        $validateData = $request->validate([
            'first_name'   => 'required',
            'email'        => 'required|email',
            'phone_number' => 'required|max:13',
            'password'     => 'required|min:6|confirmed',

        ], [
            'password.min'     => 'Password at least 6 character',
            'phone_number.max' => 'Maximum 13 number',
        ]);

        $data              = new RegisterUser;
        $data->first_name  = $request->first_name;
        $data->last_name   = $request->last_name;
        $data->email       = $request->email;
        $data->phonenumber = $request->phone_number;
        $data->gender      = $request->gender;
        $data->Division    = $request->division;
        $data->District    = $request->district;
        $data->thana       = $request->thana;
        $data->postoffice  = $request->postoffice;
        $data->village     = $request->village;
        $data->password    = $request->password;

        try {
            $data->save();
            session()->flash('message', 'user Account created');
            session()->flash('type', 'success');
            return redirect::to(route('user-login'));
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    public function userlogin()
    {
        return view('user.userlogin');
    }
    public function login(Request $request)
    {

        $this->validate($request, [
            'user_email'    => 'required|email',
            'user_password' => 'required|min:6',
        ]);

        $email    = $request->user_email;
        $password = $request->user_password;

        $result = DB::table('register_users')
            ->where('email', $email)
            ->where('password', $password)
            ->first();

        if ($result) {

            Session::put('id', $result->id);
            Session::put('name', $result->first_name);

            return redirect()->route('index');
        } else {
        
            Session::put('message','Email or Password Invalid');

            return Redirect::to('/user-login');

        }
    }
    public function userlogout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('user-login');

    }
}
