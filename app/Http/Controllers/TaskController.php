<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => ['required', 'string', 'min:4', 'unique:tasks'],
            'theme' => ['required', 'string'],
            'status' => ['required'],
            'priority' => ['required'],
            'performer' => ['required', 'exists:users,id'],
            'deadline' => ['required', 'date'],
            'stack' => ['required'],
        ]);

        $task = Task::create([
            'code' => $request->input('code'),
            'theme' => $request->input('theme'),
            'status' => $request->input('status'),
            'priority' => $request->input('priority'),
            'user_id' => $request->input('performer'),
            'tester_id' => ($request->input('tester')) ? $request->input('tester') : auth()->id(),
            'deadline' => $request->input('deadline'),
            'stack' => $request->input('stack'),
        ]);

        return redirect()->route('tasks.show', ['task' => $task]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
