<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminArtikelController extends Controller
{
    //


    public function index()
    {
        $articles = Article::orderByDesc('created_at')->get();

        return view('admin.artikel.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'link' => 'required|url'
    ]);

    $url = $request->link;

    try {

        $response = Http::get($url);

        $html = $response->body();

        preg_match('/<meta property="og:title" content="(.*?)"/i', $html, $title);
        preg_match('/<meta property="og:image" content="(.*?)"/i', $html, $image);
        preg_match('/<meta property="og:description" content="(.*?)"/i', $html, $desc);

       $imageUrl = $image[1] ?? null;

        if ($imageUrl) {
            $imageUrl = html_entity_decode($imageUrl); // fix &amp;

            if (str_contains($imageUrl, ' ')) {
                $imageUrl = str_replace(' ', '%20', $imageUrl);
            }

            if (str_starts_with($imageUrl, '/')) {
                $imageUrl = 'https://' . parse_url($url, PHP_URL_HOST) . $imageUrl;
            }
        }
        Article::create([
                'title'   => $title[1] ?? 'Artikel Tanpa Judul',
                'content' => $desc[1] ?? '',
                'image'   => $imageUrl,
                'link'    => $url,
                'author'  => parse_url($url, PHP_URL_HOST),
            ]);

        return redirect()
            ->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan');

    } catch (\Exception $e) {

        return back()
            ->with('error', 'Gagal mengambil artikel dari link');
    }
}
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.artikel.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $imageName = $article->image;

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(
                public_path('gambar_artikel'),
                $imageName
            );
        }

        $article->update([
            'title'   => $request->title,
            'content' => $request->content,
            'image'   => $imageName,
            'link'    => $request->link,
            'author'  => $request->author,
        ]);

        return redirect()
            ->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil diupdate');
    }

    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return redirect()
            ->back()
            ->with('success', 'Artikel berhasil dihapus');
    }
}

