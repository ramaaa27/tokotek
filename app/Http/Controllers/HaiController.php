<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
    // public function index(Request $request, $nik)
    // {
    //     $result = "Hai ".$request->nama." dengan NIK".$nik." dan id ".$request->id;
    //     return $result;
    // }

    public function player(Request $request, $club)
    {
        $result = "Hai ".$request->nama." pemain yang berasal dari ".$club;
        return $result;
    }
}

