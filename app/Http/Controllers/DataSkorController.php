<?php

namespace App\Http\Controllers;

use App\SkorModel;
use Illuminate\Http\Request;

class DataSkorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$skor = SkorModel::all();
        return view('data_skor', ['skor' => $sk, 'title' => 'Skor Mahasiswa']);
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
        $request->validate([
        'nama' => ['required'],
		'C1' => ['required'],
		'C2' => ['required'],
		'C3' => ['required'],
		'C4' => ['required']
		]);
		
		$skor = new SkorModel;
		$skor->id = null;
		$skor->skor_nama = $request->nama;
		
		if($request->jurusan==1){
			$jur = 'Akuntansi';
		}
		elseif($request->jabatan==2){
			$jur = 'Administrasi Niaga';
		}
		elseif($request->jabatan==3){
			$jur = 'Teknik Elektro';
		}
		else{
			$jur = 'Teknik Informatika';
		}
		
		$skor->skor_jurusan = $jur;
		$skor->skor_kriteria1 = $request->C1;
		$skor->skor_kriteria2 = $request->C2;
		$skor->skor_kriteria3 = $request->C3;
		$skor->skor_kriteria4 = $request->C4;
		
		$skor->save();
		
		return redirect('/skor')->with('status', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SkorModel $skor)
    {
       return view('upd_skor', compact('skor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $skor)
    {
        if($request->jurusan==1){
			$jur = 'Akuntansi';
		}elseif($request->jurusan==2){
			$jur = 'Administrasi Niaga';
		}elseif($request->jurusan==3){
			$jur = 'Teknik Elektro';
		}else{
			$jur = 'Teknik Informatika';
		}
				
        SkorModel::where('id', $skor)
				-> update([
				'skor_nama' => $request->nama,
				'skor_jurusan' => $jur,
				'skor_kriteria1' => $request->C1,
				'skor_kriteria2' => $request->C2,
				'skor_kriteria3' => $request->C3,
				'skor_kriteria4' => $request->C4
				]);
				
		return redirect('/skor')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skor = SkorModel::find($id);
		$skor->delete();
		
		return redirect('/skor')->with('status', 'Data berhasil dihapus!');
    }
}
