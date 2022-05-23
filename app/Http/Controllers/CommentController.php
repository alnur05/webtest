<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Task;

class CommentController extends Controller
{
    public function store(Task $task)
    {
        $attributes = $this->validateComment();
        $attributes['user_id'] = auth()->id();
        $attributes['task_id'] = $task->id;

        Comment::create($attributes);

        return redirect()->route('tasks.show', $task);
    }

    protected function validateComment()
    {
        return request()->validate([
            'body' => ['required']
        ]);
    }
}
