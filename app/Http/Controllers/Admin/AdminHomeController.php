<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use iluminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();
        return view('admin.home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            'title' => 'required',
            'description' => 'required',
        ]);

        //untuk menginput data ke db
        Home::create($request->all());
        return redirect()->route('home.index')->with('success', 'Data skill berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('admin.home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('admin.home.edit', compact('home'));
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        $request->validate( [
            'title' => 'required',
            'description' => 'required',
        ]);

        $home->update($request->all());
        return redirect()->route('home.index')->with('success', 'Data home berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('home.index')->with('success', 'Data home berhasil dihapus!');
    }
}
