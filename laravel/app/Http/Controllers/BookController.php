<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    //
    public function books()
    {
        $books=Book::all();
        return view('books',compact('books'));
        //dd('this is test');

    }
    public function create()
    {

        return view('create');
    }
    public function addbook(Request $request)
    {
        Book::create($request->all());
        return redirect('/books');
    }
}
