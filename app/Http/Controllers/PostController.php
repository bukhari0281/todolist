<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}

public function create()
{
    // Tampilkan formulir untuk membuat post baru
}

public function store(Request $request)
{
    // Simpan post baru ke database
     // Validasi data
     $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    // Simpan post baru
    Post::create($request->all());

    return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat!');
}

public function show($id)
{
    // Tampilkan detail post
}

public function edit($id)
{
    // Tampilkan formulir untuk mengedit post
}

public function update(Request $request, $id)
{
    // Perbarui post di database
    // Validasi data
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    // Perbarui post
    $post = Post::find($id);
    $post->update($request->all());

    return redirect()->route('posts.index')->with('success', 'Post berhasil diperbarui!');
}

public function destroy($id)
{
    // Hapus post dari database
    $post = Post::find($id);
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus!');
}

}
