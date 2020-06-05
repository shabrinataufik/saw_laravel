<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KriteriaModel;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$kriteria = KriteriaModel::all();
        return view('kriteria', ['kriteria' => $kriteria, 'title' => 'Kriteria']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validatedData = $request->validate([
        'nama_krit' => ['required'],
        'bobot' => ['required']
		]);
		
        $krit = new KriteriaModel;
		$krit->id = null;
		$krit->krit_nama = $request->nama_krit;
		$krit->krit_bobot = $request->bobot;
		
		$krit->save();
		
		return redirect('/kriteria')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KriteriaModel $krit)
    {
        
		return $krit;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KriteriaModel $krit)
    {
        return view('upd_kriteria', compact('krit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $krit)
    {
        KriteriaModel::where('id', $krit)
				-> update([
				'krit_nama' => $request->nama_krit,
				'krit_bobot' => $request->bobot
				]);
				
		return redirect('/kriteria')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($krit)
    {
        $kriteria = KriteriaModel::find($krit);
		$kriteria->delete();
		return redirect('/kriteria')->with('status', 'Data berhasil dihapus!');
    }
}
