<?php

namespace App\Http\Controllers;

use App\Models\properti;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Adminprojectcontrol extends Controller
{
    public function index()
    {
        $projects = properti::latest('id')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'harga' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('properti'), $imageName);
        }

        properti::create([
            'nama_pemilik' => $request->nama_pemilik,
            'jenis' => $request->jenis,
            'lokasi' => $request->lokasi,
            'luas_m2' => $request->luas_m2, 
            'status' => $request->status,
            'harga' => $request->harga,
            'gambar' => $imageName,
        ]);

        return redirect()->route('projects.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $project = properti::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = properti::findOrFail($id);

        $request->validate([
            'nama_pemilik' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
            'luas_m2' => 'required',
            'status' => 'required',
            'harga' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {

            if ($project->gambar && file_exists(public_path('properti/'.$project->gambar))) {
                unlink(public_path('properti/'.$project->gambar));
            }

            $imageName = time().'_'.$request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('properti'), $imageName);

            $project->gambar = $imageName;
        }

        $project->nama_pemilik = $request->nama_pemilik;
        $project->jenis = $request->jenis;
        $project->lokasi = $request->lokasi;
        $project->luas_m2 = $request->luas_m2;
        $project->status = $request->status;
        $project->harga = $request->harga;

        $project->save();

        return redirect()->route('projects.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $project = Properti::findOrFail($id);

        if ($project->gambar && file_exists(public_path('properti/'.$project->gambar))) {
            unlink(public_path('properti/'.$project->gambar));
        }

        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Data berhasil dihapus');
    }

    public function cetakpdf()
    {
        $projects = Properti::all();

        $pdf = Pdf::loadView('admin.projects.pdf', compact('projects'));

        return $pdf->stream('NATURAL LAND PROPERTY - properti-'.date('Y-m-d').'.pdf');
    }
  
}