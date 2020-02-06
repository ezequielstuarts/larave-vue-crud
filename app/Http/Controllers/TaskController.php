<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::get();
        return $tasks;
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $task = Taks::findOrFail($id);
        return $task;
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $task = Taks::findOrFail($id);
        $task->delete();
    }
}
