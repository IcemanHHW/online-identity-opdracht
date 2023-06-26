<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return view('welcome', [
            'tasks' => Task::all()->where('user_id', auth()->user()->id)
        ]);
    }
}
