<?php

namespace App\Http\Controllers;

use App\tasks;
use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function store(Request $request)
    {
        $request['owner_id'] = Auth::id();
        tasks::create($request->all());
        return redirect('dashboard');
    }

    public function destroy(tasks $task)
    {
        $task->delete();
        return redirect('dashboard');   
    }
}
