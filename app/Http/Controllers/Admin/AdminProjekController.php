<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projek;
use Iluminate\Support\Facades\Storage;

class AdminProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projek = Projek::all();
        return view('admin.projek.index', compact('projek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'date' => 'required|date',
        ]);

        // Create a new project instance and save it to the database
        $projek = new Projek();
        $projek->name = $request->name;
        $projek->description = $request->description;
        $projek->link = $request->link;
        $projek->date = $request->date;
        $projek->save();

        // Redirect to a desired page with a success message
        return redirect()->route('projek.index')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projek $projek)
    {
        return view('admin.projek.show', compact('projek'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projek $projek)
    {
        return view('admin.projek.edit', compact('projek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projek $projek)
    {
        $request->validate( [
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
            'date' => 'required',
            
        ]);

        $projek->update($request->all());
        return redirect()->route('projek.index')->with('success', 'Data projek berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projek $projek)
    {
        $projek->delete();
        return redirect()->route('projek.index')->with('success', 'Data projek berhasil dihapus!');
    }
}
