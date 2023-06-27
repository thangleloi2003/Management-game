<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Game;
use \App\Models\Publisher;
use App\Models\Category;
use App\Models\Platform;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $games = Game::all();

        return view('game.index', [
            'games' => $games,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $publishers = publisher::all();
        $categories = Category::all();
        $platforms = Platform::all();
        return view('game.create',[
            'publishers' => $publishers,
            'categories' => $categories,
            'platforms' => $platforms,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $game = new Game();

        $game->title = $request->title;
        $game->publisher_id = $request->publisher;
        $game->category_id = $request->category;
        $game->description = $request->description;
        $photo = $request->file('photo')->store('public'); 
        $game->photo = substr($photo,strlen('public/'));
        $game->save();
        $game->platforms()->attach($request->platforms);

        return redirect('/games');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Game::find($id);

        return view('game.show', [
            'game' => $game,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::find($id);
        $publishers = Publisher::all();
        $categories = Category::all();
        $platforms = Platform::all();

        return view('game.edit', [
            'game' => $game,
            'publishers' => $publishers,
            'categories' => $categories,
            'platforms' => $platforms,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = Game::find($id);

        $game->title = $request->title;
        $game->publisher_id = $request->publisher;
        $game->category_id = $request->category;
        $game->platforms()->sync($request->platforms);
        $game->description = $request->description;

        $game->save();

        return redirect('/games');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::find($id);

        $game->delete();

        return redirect('/games');
    }
}
