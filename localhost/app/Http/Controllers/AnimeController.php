<?php

namespace App\Http\Controllers;
use App\Models\Anim;
use Illuminate\Http\Request;
class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function ShowAll(){
        $sus = Anim::all();

        return response()->json($sus);
    }

    public function Show($id) {
        $sus = Anim::find($id);

        return response()->json($sus, 200);
    }

    public function add(Request $request) {

        $Anime_hero = $request->input('Anime_hero');
        $Anime_= $request->input('Anime_');
        $anime_lenght = $request->input('anime_lenght');
        $sus = new Anim();
        $sus->Anime_hero = $Anime_hero;
        $sus->Anime_ = $Anime_;
        $sus->anime_lenght = $anime_lenght;
        $sus->save();

        return response()->json($sus, 201);
    }
    public function edit(Request $request, $id) {
        $sus = Anim::find($id);
        $Anime_hero = $request->input('Anime_hero');
        $Anime_ = $request->input('Anime_');
        $anime_lenght = $request->input('anime_lenght');
        $sus = new Anim();
        $sus->Anime_hero = $Anime_hero;
        $sus->Anime_ = $Anime_;
        $sus->anime_lenght = $anime_lenght;
        $sus->save();

        return response()->json($sus, 200);
    }
    public function delete($id) {
        $sus = Anim::find($id);
        $sus->delete();

        return response()->json(['sus'=> 'deleted'], 200);
    }


}
