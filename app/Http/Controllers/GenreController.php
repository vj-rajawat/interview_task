<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return view('admin.genre.index');
    }

    public function create()
{
    return view('admin.genre.create');
}
}
