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
    public function index(Request $request)
    {
    //    $request->session()->put(['paul'=>'instructor']);
    //    return $request->session()->all();
    //    session(['colin'=>'student']); -- This is the global version, doesn't require the request
   

    //    session(['edwin'=>'teacher']);
    //    return session('edwin');

    //    $request->session()->forget('edwin');
        $request->session()->flush(); // -- Delete ALL
        return $request->session()->all();
    }
}
