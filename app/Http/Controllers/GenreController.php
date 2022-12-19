<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::all('id','name');
        return view('admin.genre.index', compact('genre'));
    }

    public function create()
    {
        return view('admin.genre.create');
    }

    public function edit($id)
    {
        $genre = Genre::where('id' , $id)->first();
        return view('admin.genre.edit', compact('genre'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $genre = new Genre();
        $genre->name = $request->name;
        $genre->save();
        return redirect('genre');   
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
       $update = Genre::find($id);
       $update->name = $request->name;
       $update->save();
        return redirect('genre');   
    }

    public function delete($id)
    {
        $delete = Genre::find($id);
        $delete->delete();
        return redirect()->back()->with('success','Task deleted successfully');
    }
}
