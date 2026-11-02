<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
{

    public function log_index() {
        return view('auth.login');
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
