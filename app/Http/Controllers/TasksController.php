<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function add(Request $req) {
        if ($req->has('task')) {
            $task = $req->task;
        } else {
            $task = "";
        }

        return view('tasks.add', compact('task'));
    }
}
