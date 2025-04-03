<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroe;
use App\Models\Universe;
use App\Models\Gender;

class SuperHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::select('id', 'name')->get();
        $universes = Universe::select('id', 'name')->get();
        return view('superheroes.create', compact('genders', 'universes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Superheroe::create([
            'gender_id' => $request->gender_id,
            'universe_id' => $request->universe_id,
            'name' => $request->name,
            'real_name' => $request->real_name,
            'picture' => $request->picture,
        ]);
        return to_route('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superhero = Superheroe::find($id);
        return view('superheroes.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superhero = Superheroe::find($id);
        $genders = Gender::select('id', 'name')->get();
        $universes = Universe::select('id', 'name')->get();
        return view('superheroes.edit', compact('superhero', 'genders', 'universes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $superhero = Superheroe::find($id);
        $superhero->update([
            'gender_id' => $request->gender_id,
            'universe_id' => $request->universe_id,
            'name' => $request->name,
            'real_name' => $request->real_name,
            'picture' => $request->picture,
        ]);
        return to_route('superheroes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superhero = Superheroe::find($id);
        $superhero->delete();
        return to_route('superheroes.index');

    }
}
