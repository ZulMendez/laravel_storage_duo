<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        $membre = Membre::all();
        return view('admin.membres.membre', compact('genres', 'membre'));
    }
    public function create(){
        $genres = Genre::all();
        return view('admin.membres.create', compact('genres'));
    }
    public function store(Request $request){
        request()->validate([
            "image" => ["required"],
            "nom" => ["required", "min:3", "max:100"],
            "age" => ["required", "numeric"],
            "genre" => ["required"]
        ]);
        // storage via input
        $request->file('image')->storePublicly('img/','public');

        // DB
        $membre = new Membre();
        $membre->image = $request->file('image')->hashName();
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre = $request->genre;
        $membre->save();
        return redirect()->route('membre.index')->with('success', 'Infos bien ajoutés');
    }
}
