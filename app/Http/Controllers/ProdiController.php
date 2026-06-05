<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Http\Requests\UpdateProdiRequest;
use App\Models\Fakultas;
use Illuminate\Http\Request;
use Illuminate\Support\Facadesf\Storage;


class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listFakultas = Fakultas::all();

        return view('prodi.create.blade', compact('listFakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fakultas_id' => 'required',
            'nama_prodi' => 'required',
            'nama_kaprodi' => 'required',
            'alias_prodi' => 'required',
            'photo_kaprodi' => 'required|mimetypes:image/*'
        ]);

        $photoKaprodi = Storage::disk("public")->putFile('prodi' $request->file('photo_kaprodi'));

        $validated['photo_kaprodi'] = $photoKaprodi
        Prodi::create($validated);
        
    }

    // Prodi::create($validated);
    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        return view('prodi.edit-prodi')
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
