<?php

namespace App\Http\Controllers;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platforms = Platform::all();
        return view('platform.index', compact('platforms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('platform.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $platform = Platform::create($request->all());
        
        return redirect("/platforms");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $platform = Platform::find($id);
        return view('platform.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $platform = Platform::find($id);
        return view ('platform.edit',compact('platform'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $platform = Platform::find($id);
        $platform->update($request->all());
        return redirect("/platforms");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $platform = Platform::find($id);

        $platform->delete();

        return redirect('/platforms');
    }
}
