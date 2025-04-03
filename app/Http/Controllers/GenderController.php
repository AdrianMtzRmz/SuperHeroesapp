<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genders = Gender::all();
        return view('genders.index', compact('genders'));
    }

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    $genders = Gender::select('id', 'name') -> get();
    return view('genders.create', compact('genders'));
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    Gender::create([
        'name' => $request->name,
    ]);
    return to_route('genders.index');
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    $gender = Gender::find($id);
    return view('genders.show', compact('gender'));
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    $gender = Gender::find($id);
    return view('genders.edit', compact('gender'));

}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $gender = Gender::find($id);
    $gender->update([
        'name' => $request->name,
    ]);
    return to_route('genders.index');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $gender = Gender::find($id);
    $gender->delete();
    return to_route('genders.index');
}
}
