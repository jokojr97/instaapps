<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gate;

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
        // return view('home');        
        if (Gate::allows('role-admin')) {
            return redirect(route('admin.dashboard.index'));
        }
        else if (Gate::allows('role-user')) {
            return redirect(route('user.dashboard.index'));
        }
    }
}
