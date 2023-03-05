<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("index");
    }

    function menu(){
        return view("menu");
    }
    function login(Request $request){

        Session::flash('email', $request->email);

        $request->validate([
            'email'=>'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',

        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

      
        if(Auth::attempt($infologin)){
            // klo proses auth sukses
            return redirect('menu')->with('success', 'Berhasil login');
        }else{
            // klo gagal
            return redirect('sesi')->withErrors('Username dan password tidak sesuai');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('sesi')->with('success', 'berhasil logout');
    }

    function register(){
        return view('register');
    }
    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name' => 'required',
            'email'=>'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan 6'
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

      
        if(Auth::attempt($infologin)){
            // klo proses auth sukses
            return redirect('sesi')->with('success', Auth::user()->name . 'Berhasil login');
        }else{
            // klo gagal
            return redirect('sesi')->withErrors('Username dan password tidak sesuai');
        }
    }
}
