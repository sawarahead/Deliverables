<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Task $register)
    {
        return view("index")->with(['registers' => $register->get]);
    }
}