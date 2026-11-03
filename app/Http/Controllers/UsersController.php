<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;

class UsersController extends Controller
{
    public function dash_index(){
        $namaUsr = auth()->user()->nama;
        $book = Book::latest()->take(6)->get();

        return view('dashboard', compact('namaUsr', 'book'));
    }

    public function log_index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password yang anda masukkan salah!'
        ]);
    }

    public function logout(Request $request) {
        Auth::logout;

        $request->session()->invalidate();
        $request->session->regenerateToken();

        return redirect('/login');
    }

    public function reg_index() {
        return view('auth.register');
    }

    public function create_reg(Request $request) {
        $regist = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'pekerjaan' => 'required|string',
            'tanggal_lahir' => 'required|date'
        ]);

        User::create([
            'nama' => $regist['nama'],
            'email' => $regist['email'], 
            'password' => Hash::make($regist['password']), 
            'pekerjaan' => $regist['pekerjaan'], 
            'tanggal_lahir' => $regist['tanggal_lahir'] 
        ]);

        return redirect()->route('auth.login');
    }
}
