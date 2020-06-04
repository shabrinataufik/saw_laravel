<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = UserModel::all();
		return view('user', ['user' => $user, 'title' => 'User']);
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
        $user = new UserModel;
		$user->id = null;
		$user->user_nama = $request->nama;
		$user->user_email = $request->email;
		$user->user_pwd = $request->pwd;
		
		if($request->jabatan==1){
			$jab = 'Admin';
		}
		elseif($request->jabatan==2){
			$jab = 'Kajur';
		}
		elseif($request->jabatan==3){
			$jab = 'Kabag. Kemahasiswaan';
		}
		else{
			$jab = 'Pudir II';
		}
		
		$user->user_jabatan = $jab;
		
		$user->save();
		
		return redirect('/user')->with('status', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $userModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $userModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserModel $userModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($us)
    {
        $user = UserModel::find($us);
		$user->delete();
		
		return redirect('/user')->with('status', 'Data berhasil dihapus!');
    }
}
