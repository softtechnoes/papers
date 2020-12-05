<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd('test');
        $user = User::where('id',Auth::user()->id)->with('role')->first();
        // dd($user->role[0]);
        return view('home',compact('user'));
    }

    public function test(){
        return view('auth.mail.confirm_mail');
    }
}
