<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EngController extends Controller
{
    //

    public function show()
    {
        // dd($id);
        return view('engs.show');
    }
}
