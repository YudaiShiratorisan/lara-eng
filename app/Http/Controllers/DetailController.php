<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Word;

class DetailController extends Controller
{
    //
    public function show()
    {
        $engs = Word::all();

        return view('engs.show',compact('engs'));
    }

    public function index()
    {
        return view('engs.index');
    }
}
