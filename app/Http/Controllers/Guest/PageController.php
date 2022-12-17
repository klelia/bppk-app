<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function home(){
        $books = Book::limit(3)->get();
        // $books = Book::select('id', 'title','cover_image')
        // ->limit(3)
        // ->get();
        // dd($books);
        return view('home', compact('books'));
    }
    public function index(){
        $books = Book::all();
        //dd($books);
        return view('books', compact('books'));
    }
}
