<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $membres = Membre::all();
        return view('admin.membres.membre', compact('membres'));
    }
    public function create(){
        $genres = Genre::all();
        $membres = Membre::all();
        return view('admin.membres.create', compact('genres', 'membres'));
    }
    public function store(Request $request){
        request()->validate([
            "image" => ["required"],
            "nom" => ["required", "min:3", "max:100"],
            "age" => ["required", "numeric"],
            "genre" => ["required"]
        ]);
        // storage via input
        $membre = new Membre();
        if ($request->hasFile('image')){
            $request->file('image')->storePublicly('img/', 'public');
            $membre->image = $request->file('image')->hashName();
        }

        // DB
        $membre->nom = $request->nom;
        $membre->age = $request->age;
        $membre->genre = $request->genre;
        $membre->save();
        return redirect()->route('membre.index')->with('success', 'Infos bien ajoutés');
    }
}
