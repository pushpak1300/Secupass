<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicationcontroller extends Controller
{
    public function home()
    {
        return view('welcome');
    }

}
