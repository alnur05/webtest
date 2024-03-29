<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        $myTasks = Task::where('user_id', auth()->id())->get();

        return view('home', [
            'myTasks' => $myTasks,
        ]);
    }
}
