<?php

namespace App\Http\Controllers;

use App\Models\properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    //
    public function index()
    {
        $properti = Properti::query()->paginate(6);
        return view('Project', compact('properti'));
    }

    // tampil detail 1 data
    public function show($id)
    {
        $properti = Properti::findOrFail($id);
        return view('Project-detail', compact('properti'));
    }


}

