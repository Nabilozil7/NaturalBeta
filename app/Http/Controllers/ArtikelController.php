<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Article;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Article::latest()->paginate(6);
        return view('artikel', compact('artikel'));
    }

    public function show($id)
    {
        $artikel = Article::findOrFail($id);
        return view('artikel-detail', compact('artikel'));
    }
}