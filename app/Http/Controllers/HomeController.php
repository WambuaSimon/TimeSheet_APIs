<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

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
        $tasks = Tasks::where('user_id', '=', Auth::user()->id)->get();
        // $tasks = Tasks::simplePaginate(15);
        return view('home',compact('tasks'));
    }
}
