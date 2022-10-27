<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EngController extends Controller
{
    //
    public function word()
    {
        return view('engs.word');
    }

    public function file()
    {
        return view('engs.file');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
