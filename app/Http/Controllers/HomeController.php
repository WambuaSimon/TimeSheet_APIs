<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
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
        $tasks = Tasks::paginate(1);
        // $tasks = Tasks::simplePaginate(15);
        return view('home',compact('tasks'));
    }
}
