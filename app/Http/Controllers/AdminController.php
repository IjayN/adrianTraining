<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
////        $this->middleware('auth:admin');
//    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilitator = Admin::count();
        $user = User::count();
        return view('admin.dashboard')->with([
          'facilitator'=>$facilitator,
          'user'=>$user,
        ]);
    }
    // public function login_headers()
    // {
    //     return view('login-headers');
    // }
    public function logout(){

    auth()->logout();
    // redirect to homepage
    return redirect('/login');
    }



}
