<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Iluminate\Support\Facades\Storage;

class AdminCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificate = Certificate::all();
        return view('admin.certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'issued_by' => 'required|string|max:255',
            'description' => 'nullable',
            'file' => 'required|mimes:pdf|max:5120',
        ]);

        $data = $request->all();

        if ($file = $request->file('file')){
            $filename = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('/storage/certificates'), $filename);
            $data['file'] = $filename;
        }

        Certificate::create($data);
        
        return redirect()->route('certificate.index')->with('success', 'Certificate Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificate.show', compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $certificate = Certificate::findOrFail($id);
        return view('admin.certificate.edit', compact('certificate'));
    }

    
    public function update(Request $request, string $id)
    {
        $certificate = Certificate::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'file' => 'nullable|file|mimes:pdf',
            'description' => 'nullable|string',
        ]);

        // Ambil semua data request
        $data = $request->all();

        // Logika untuk file
        if ($file = $request->file('file')) {
            // Hapus file lama jika ada
            if ($certificate->file && file_exists(public_path('/storage/certificates/' . $certificate->file))) {
                unlink(public_path('/storage/certificates/' . $certificate->file));
            }

            // Simpan file baru
            $filename = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('/storage/certificates'), $filename);
            $data['file'] = $filename;
        }

        // Perbarui data certificate
        $certificate->update($data);

        return redirect()->route('certificate.index')->with('success', 'Certificate updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);

        // Delete file if exists
        $filePath = public_path('/storage/certificates/' . $certificate->file);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete certificate record
        $certificate->delete();

        return redirect()->route('certificate.index')->with('success', 'Certificate Deleted Successfully');
    }
}
