<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Validation\Rule;

class AdminTaskController extends Controller
{
    public function create() {
        return view('admin.create');
    }

    public function store() {
        Task::create(array_merge($this->validateTask(), [
            'user_id' => request()->user()->id,
        ]));

        return redirect('/');
    }

    public function edit(Task $task) {
        return view('admin.edit', ['task' => $task]);
    }

    public function update(Task $task) {
        $attributes = $this->validateTask($task);


        $task->update($attributes);

        return back()->with('success', 'Taak bijgewerkt!');
    }

    public function destroy(Task $task) {
        $task->delete();

        return back()->with('success', 'Taak verwijderd!');
    }

    public function complete(Task $task) {
        $task->is_complete = true;
        $task->save();

        return back()->with('success', 'Taak voltooid!');
    }

    protected function validateTask(?Task $task = null): array
    {
        $task ??= new task();

        return request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
    }
}
