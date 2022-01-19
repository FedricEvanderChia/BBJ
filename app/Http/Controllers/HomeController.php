<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function GoToDetail($bookID) {
            $Book = Book::where('id', $bookID)->first();
            return view('detail')->with(['Book' => $Book]);
        
    }
    public function search(Request $request){
        $books = Book::where('name','LIKE','%'.$request->name.'%')-> paginate(6);
        return view('home')->with(['books'=>$books]);
    }
    public function index() {
        $books = Book::paginate(6);
        return view('home')->with(['books'=>$books]);
    }
}
