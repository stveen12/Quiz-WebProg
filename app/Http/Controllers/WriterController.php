<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    //
    public function showWriters()
    {
        $writers = Writer::all();
        return view('writer/writer', compact('writers'));
    }
}
