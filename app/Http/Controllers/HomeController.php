<?php

use App\Models\Department;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view('welcome', compact('departments'));
    }
}
