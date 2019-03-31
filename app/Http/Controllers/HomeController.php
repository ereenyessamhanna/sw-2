<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photographer;

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
        $photographers = Photographer::query()
        ->where('user_type', 'LIKE', 'photographer') 
        ->get();;
        return view('home')->with('photographers',$photographers);
    }
}
