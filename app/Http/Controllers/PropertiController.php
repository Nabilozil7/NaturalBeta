<?php

namespace App\Http\Controllers;

use App\Models\properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    //
    public function index()
    {
        $Properti = properti::query()->paginate(6);
        return view('Project', compact('properti'));
    }

    // tampil detail 1 data
    public function show($id)
    {
        $properti = properti::findOrFail($id);
        return view('Project-detail', compact('properti'));
    }


}

