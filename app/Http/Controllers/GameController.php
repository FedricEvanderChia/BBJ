<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Detail;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class GameController extends Controller
{
    public function GoToUpdate($gameID) {
        $game = Book::where('id', $gameID)->first();
            return view('update')->with(['Game' => $game])->with(['genres'=>$genres]);
    }   
    public function store(Request $request){
        dd($request);
        $validator = $validator = Validator::make($request->all(),[
            'title' => 'required',
            'price' => 'required|digits_between:1000,1000000',
            'description' => 'required|max:500|string',
            'longdesc' =>  'required|max:2000|string',
            'developer' => 'required',
            'publisher' => 'required',
        ]);
        
        if($validator->fails() ){
            return redirect('/insert')->withFail("Username length must be at least 6 characters.")->with('fail1',"Password must at least 8 characters and alpha numeric.");
        }else{
        $game = new Game();
        $game->title = $request->title;
        $game->price = $request->price;
        $game->genre_id = $request->genre_id;
        $game->save();
        $detail = new Detail();
        $detail->game_id = $game->id;
        $detail->description = $request->description;
        $detail->longdesc = $request->longdesc;
        $detail->developer = $request->developer;
        $detail->publisher = $request->publisher;
        $detail->save();
        
        return redirect('/insert')->with('message',"Game Created");
    }
        //$path = $request->file('file')->store('public/images);
        //$roomtype->image = $path
        // $detail->image;
        // $detail->video;

    }

    public function update(Request $request,$gameID){
        // $validator = $validator = Validator::make($request->all(),[
        //     'description' => 'required|max:500|string',
        //     'longdesc' =>  'required|max:2000|string',
        //     'price' => 'required|digits_between:1000,1000000'
        // ]);
        // if($validator->fails() ){
        //     return redirect('/manage/update/{gameID}}')->withFail("Username length must be at least 6 characters.")->with('fail1',"Password must at least 8 characters and alpha numeric.");
        // }else{
            $game = Game::find($gameID);
            $detail = Detail::find($gameID);
            $detail->description = $request->description;
            $detail->longdesc = $request->longdesc;
            $game->genre_id = $request->genre_id;
            $game->price = $request->price;
            
            $game->save();
            $detail->save();
            return back(); 
    }


    public function destroy($gameID){
        $game = Game::find($gameID)->first();
        $game->delete();
        return back();
    }
}
