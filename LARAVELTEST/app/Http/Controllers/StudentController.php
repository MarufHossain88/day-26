<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('HOME');
    }


    public function add(){
        return 'Chupe chupe bolo';
    }
}
