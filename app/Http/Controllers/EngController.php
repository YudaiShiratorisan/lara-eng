<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EngController extends Controller
{
    //

    public function index()
    {
        // dd($id);
        return view('engs.index');
    }
}
