<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function upload()
    {
        return view('welcome');
    }
}
