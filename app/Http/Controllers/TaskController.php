<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $user_id = auth()->id();
        return view('welcome', [
            'tasks' => Task::where('user_id', $user_id)->get()
        ]);
    }
}
