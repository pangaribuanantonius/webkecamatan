<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index', ['user' => \App\Models\Users::All()]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        \App\Models\Users::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => \Hash::make($request->password),
                'level' => $request->level,
            ]);
        return redirect('user/index')->with('success', 'Berhasil Menambah Data!');
    }

   public function edit(Users $user){
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, Users $user){
        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'level' => $request->level,
            ]);
        return redirect('user/index')->with('update', 'Berhasil Mengubah Data!');
    }

    public function destroy(Request $request, Users $user){
            $user::destroy($user->id);
        /*return redirect('info/index')->with(['flashdata' => 'Berhasil']);*/
        return redirect('user/index')->with('delete', 'Berhasil Menghapus Data!');
    }


} 
