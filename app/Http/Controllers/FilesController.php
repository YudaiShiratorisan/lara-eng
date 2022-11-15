<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FilesController extends Controller
{
    function store (Request $request)
    {
        $file = new File;
        $file -> file = $request -> file;
        $file -> user_id = $request -> user_id;
        $file -> save();

        return redirect()->route('welcome');
    }

}