<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;

class AdminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = $request->all();
    
        if ($request->hasFile('image')) {
            // Ambil file gambar yang diupload
            $file = $request->file('image');
            // Tentukan nama file dan lokasi tujuan
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = storage_path('app/public/skills'); // Folder tujuan di storage

            // Pastikan folder 'skills' ada
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Pindahkan file ke folder tujuan
            $file->move($destinationPath, $filename);
            
            // Simpan nama file ke dalam data
            $data['image'] = 'skills/' . $filename;
        }
    
        // Simpan data skill ke dalam database
        Skill::create($data);
    
        return redirect()->route('skill.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return view('admin.skill.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skill = Skill::findOrFail($id);

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($skill->image && Storage::exists('public/' . $skill->image)) {
                Storage::delete('public/' . $skill->image);
            }

            // Ambil file gambar baru dan simpan
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = storage_path('app/public/skills'); // Folder tujuan di storage

            // Pastikan folder 'skills' ada
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Pindahkan file ke folder tujuan
            $file->move($destinationPath, $filename);

            $data['image'] = 'skills/' . $filename;
        } else {
            $data['image'] = $skill->image;
        }

        $skill->update($data);

        return redirect()->route('skill.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        // Hapus gambar jika ada
        if ($skill->image && Storage::exists('public/' . $skill->image)) {
            Storage::delete('public/' . $skill->image);
        }

        // Hapus data skill
        $skill->delete();
        
        return redirect()->route('skill.index')->with('success', 'Data skill berhasil dihapus!');
    }
}
