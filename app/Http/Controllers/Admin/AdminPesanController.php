<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesan;
use Iluminate\Support\Facades\Storage;

class AdminPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesan = Pesan::all();
        return view('admin.pesan.index', compact('pesan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'pesan' => 'required',
            ]);
        
            // Menyimpan data ke database
            Pesan::create($request->all());
        
            // Redirect kembali ke halaman contact dengan pesan sukses
            return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
        

    /**
     * Display the specified resource.
     */
    public function show(Pesan $pesan)
    {
        return view('admin.pesan.show', compact('pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pesan = Pesan::findOrfail($id);
        $pesan->delete();
        return redirect()->route('pesan.index')->with('success', 'Data contact berhasil dihapus!');
    }
}
