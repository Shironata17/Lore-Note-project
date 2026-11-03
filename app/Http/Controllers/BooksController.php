<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function addBook() {
        return view('user.addbook');
    }

    public function createBook(Request $request) {
        $bookCr = $request->validate([
            'judul' => 'required|string|unique:books,judul',
            'sinopsis' => 'required|string',
            'genre' => 'required|string',
            'tag' => 'required|string'
        ]);

        Book::create([
            'judul' => $bookCr['judul'],
            'sinopsis' => $bookCr['sinopsis'],
            'genre' => $bookCr['genre'],
            'tag' => $bookCr['tag']
        ]);

        return redirect()->route('dashboard');
    }
}
