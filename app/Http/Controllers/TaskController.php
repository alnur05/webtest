<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Status;
use App\Models\Stack;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create', [
            'users' => User::all(),
            'types' => Type::all(),
            'statuses' => Status::all(),
            'stacks' => Stack::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = Task::create($this->validateTask());

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
        return view('tasks.edit', [
            'task' => $task,
            'users' => User::all(),
            'types' => Type::all(),
            'statuses' => Status::all(),
            'stacks' => Stack::all()
        ]);
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
        $task->update($this->validateTask($task));

        return redirect()->route('tasks.show', ['task' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
       $task->delete();

       return redirect()->route('tasks.index');
    }

    protected function validateTask(Task $task = null) {
        $task ??= new Task();

        return request()->validate([
            'code' => ['required', 'string', 'min:4', Rule::unique('tasks', 'code')->ignore($task->code, 'code')],
            'title' => ['required', 'string'],
            'status_id' => ['required', Rule::exists('statuses', 'id')],
            'priority' => ['required'],
            'tester_id' => ['required', Rule::exists('users','id')],
            'user_id' => ['required', Rule::exists('users','id')],
            'deadline' => ['required', 'date'],
            'stack_id' => ['required', Rule::exists('stacks', 'id')],
            'description' => [],
            'type_id' => ['required', Rule::exists('types', 'id')]
        ]);
    }
}
