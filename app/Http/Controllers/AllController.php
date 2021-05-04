<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        $genres = Genre::all();
        return view('home', compact('genres'));
    }
}
