<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    //login page
    public function index()
    {
        return view('login');
    }
    
    //admindashboard
    public function admin()
    {
        return view('admindashboard');
    }

    //kurirdashboard
    public function kurir()
    {
        return view('kurirdashboard');
    }

    //userdashboard
    public function user()
    {
        return view ('userdashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
}