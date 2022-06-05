<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::paginate(10);
        return view('index', compact('films'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $filmData = $request->validate([
            'titel' => 'required|max:255',
            'jaar' => 'required|max:4',
            'genre' => 'required|max:255',
            'tijdsduur' => 'required|max:3',
        ]);
        Film::create($filmData);
        return redirect('/films')->with('completed', 'Film toegevoegd');
    }

    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('show', compact('film'));
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('edit', compact('film'));
    }

    public function update(Request $request, $id)
    {
        $filmData = $request->validate([
            'titel' => 'required|max:255',
            'jaar' => 'required|max:4',
            'genre' => 'required|max:255',
            'tijdsduur' => 'required|max:3',
        ]);
        Film::whereId($id)->update($filmData);
        return redirect('/films')->with('completed', 'Film aangepast');
    }

    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();
        return redirect('/films')->with('completed', 'Film verwijderd');
    }
}
