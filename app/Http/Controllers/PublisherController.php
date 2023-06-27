<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::all();

        return view('publisher.index', [
            'publishers' => $publishers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("publisher.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publisher = new Publisher();

        $publisher->name = $request->name;
        $publisher->email = $request->email;
        $publisher->phone = $request->phone;
        $publisher->detail = $request->detail;
        $photo = $request->file('photo')->store('public'); 
        $publisher->photo = substr($photo,strlen('public/'));
        $publisher->save();

        return redirect('/publishers');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $publisher = Publisher::find($id);
        return view('publisher.show', [
            'publisher' => $publisher,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $publisher = Publisher::find($id);
        return view('publisher.edit', [
            'publisher' => $publisher,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $publisher = Publisher::find($id);

        $publisher->name = $request->name;
        $publisher->email = $request->email;
        $publisher->phone = $request->phone;
        $publisher->detail = $request->detail;

        $publisher->save();

        return redirect('/publishers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publisher = Publisher::find($id);

        $publisher->delete();

        return redirect('/publishers');
    }
}
