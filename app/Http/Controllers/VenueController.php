<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        return view('admin.venue.index');
    }

    public function create()
    {
        return view('admin.venue.create');
    }
}
