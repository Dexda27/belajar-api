<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function getNilai(){
        $nilai = nilai::all();
        return response()->json($nilai);
    }

    
}
