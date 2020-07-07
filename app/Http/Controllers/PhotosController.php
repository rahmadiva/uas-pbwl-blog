<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Photos;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = photos::all();
        return view('photo.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lst = Post::all();
        return view('photo.add', compact('lst'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ],
        [
            'title.required' => 'Title wajib diisi'
        ]);
        $file = $request->file('file');
        $nama = $file->getClientOriginalName();
        $simpan = 'img';
        $file->move($simpan, $nama);

        Photos::create([
            'title' => $request->title,
            'post_id' => $request->post_id,
            'file' => $nama,
            'text' => $request->text,
            'date' => $request->date
        ]);
        return redirect('photo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Photos::findOrFail($id);
        $lst = Post::all();
        return view('photo.edit', compact('row','lst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required'
        ],
        [
            'title.required' => 'Nama wajib diisi'
        ]);
        $row = Post::findOrFail($id);
        $row->update([
            'title' => $request->title,
            'post_id' => $request->post_id,
            'text' => $request->text,
            'date' => $request->date
        ]);

        return redirect('photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Photos::findOrFail($id);
        $row->delete();

        return redirect('photos');
    }
}
