<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('permintaan', [
            "title" => "Permintaan Aplikasi",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function dokumen(Post $post)
    {
        return view('dokumen', [
            "title" => "dokumen",
            "post" => $post

        ]);
    }

    public function data()
    {
        return view('dashboard.dataform.data',[
            'title' => 'Data HelpDesk'
        ]);
    }

    public function store(Request $request)
    {
        $validatedDoc = $request->validate([
            'no' => 'required|numeric',
            'tanggal' => 'required|date',
            'judul' => 'required|min:5|max:255',
            'asal' => 'required|min:5|max:255',
            'tujuan' => 'required|min:5|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $validatedDoc['image'] = $request->file('image')->store('post-image', 'public');
        // return request()->all();
        // $file = $request->file('file');
        // $fileData = file_get_contents($file);
        // dd('data terkirim');
        Post::create($validatedDoc);

        return redirect('/data')->with('success', 'Dokumen Berhasil di buat!');
    }
}
