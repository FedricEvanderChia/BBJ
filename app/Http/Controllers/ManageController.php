<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function GoToManage() {
        $books = Book::paginate(6);
        return view('manage')->with(['books'=>$books]);
    }

    public function search(Request $request){
        //startsWith||contains
        //starts with
        //$books = Book::where('name','LIKE',$request->name . '%')->get();
        //Select * from Books Where
        $books = Book::where('name','LIKE','%'.$request->name.'%')-> paginate(8);
        return view('manage')->with(['games'=>$books]);
    }
}