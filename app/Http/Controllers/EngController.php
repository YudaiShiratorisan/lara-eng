<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\File;

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

    function store(Request $request)
    {
        // dd($request);
        $eng = new Word;
        $eng -> word = $request -> word;
        $eng -> mean = $request -> mean;
        $eng -> user_id = $request -> user_id;

        $eng -> save();

        return redirect()->route('welcome');
    }
}
