<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function all(){
        return view('jobs.all');
    }

    public function admin(){
        return view('jobs.admin.dashboard');
    }
}
