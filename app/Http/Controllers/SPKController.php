<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use App\SkorModel;
use App\KriteriaModel;

class SPKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
	
	public function get_saw()
	{
		// normalisasi data
		
		$skor = SkorModel::all();
		$max[0] = SkorModel::max('skor_kriteria1');
		$max[1] = SkorModel::max('skor_kriteria2');
		$max[2] = SkorModel::max('skor_kriteria3');
		$max[3] = SkorModel::max('skor_kriteria4');
		
		/*$max[0]=max($m1);
		$max[1]=max($m2);
		$max[2]=max($m3);
		$max[3]=max($m4);*/
		
		$krit = KriteriaModel::all();
		$rowss = $krit->count();
		
		$rows = $skor->count();
		$norm_skor=array();
		$nama=array();
		
		$j=0;
		
		foreach($skor as $sk){
			$norm_skor[$j][0]=($sk->skor_kriteria1)/$max[0];
			$norm_skor[$j][1]=($sk->skor_kriteria2)/$max[1];
			$norm_skor[$j][2]=($sk->skor_kriteria3)/$max[2];
			$norm_skor[$j][3]=($sk->skor_kriteria4)/$max[3];
			$nama[$j]=$sk->skor_nama;
			$j=$j+1;
		}
		
		// saw
		$i=0;
		foreach($krit as $kr){
			$bobot[$i]=$kr->krit_bobot;
			$i=$i+1;
		}
		
		$v_saw = array();
		$result='';
		
		$j=0;
		
		foreach($skor as $sk){
			$v_saw[$j][0]= $nama[$j];
			$v_saw[$j][1]=($sk->skor_kriteria1*$bobot[0])*($sk->skor_kriteria2*$bobot[1])*($sk->skor_kriteria3*$bobot[2])*($sk->skor_kriteria4*$bobot[3]);
			$v[$j]=$v_saw[$j][1];
			$j=$j+1;
		}
		
		$sort=$v_saw[0][1];
		$sort_name=$v_saw[0][0];
		for($i=0; $i<$rows; $i++){
			if($sort<$v_saw[$i][1]){
				$sort=$v_saw[$i][1];
				$sort_name=$v_saw[$i][0];
			}
		}		
		
		
		
		$skor = SkorModel::all();
        return view('home',['title' => 'Home', 'skor' => $skor, 'saw' => $v_saw, 'rows' => $rows, 'result' => $sort_name]);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
