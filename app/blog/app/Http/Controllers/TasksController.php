<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

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

    public function show($id){
        $task = DB::table('tasks')->find($id);
        // var_dump($tasks);
        
        return view('tasks.show', compact('task'));
    }
}
