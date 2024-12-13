<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Iluminate\Support\Facades\Storage;

class AdminAboutControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
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
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('storage/abouts');
            $file->move($destinationPath, $filename);
            $data['image'] = 'image/' . $filename;
        }
    
        About::create($data);
    
        return redirect()->route('about.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($about->image && file_exists(public_path('storage/' . $about->image))) {
                unlink(public_path('storage/' . $about->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/image'), $filename);

            $data['image'] = 'image/' . $filename;
        } else {
            $data['image'] = $about->photo;
        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'Data berhasil diperbarui.');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
{
    // Periksa apakah gambar ada dan hapus file gambar dari storage
    if ($about->image && file_exists(public_path('storage/' . $about->image))) {
        unlink(public_path('storage/' . $about->image));
    }

    // Hapus data About dari database
    $about->delete();

    return redirect()->route('about.index')->with('success', 'Data about berhasil dihapus!');
}

}
