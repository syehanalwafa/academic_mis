<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        $asisten = 'John Doe';
        $mahasiswas = ['marco', 'Syehan', 'Maher'];

        return view('demo.file2', [
            'asdos' => $asisten,
        ])->with('students', $mahasiswas);
    }
}
