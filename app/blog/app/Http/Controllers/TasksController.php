<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use DB;

class TasksController extends Controller
{
    //
    /**
     * Create the default page
     * 
     */
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task){
        // $task = DB::table('tasks')->find($id);

        return view('tasks.show', compact('task'));
    }
}
