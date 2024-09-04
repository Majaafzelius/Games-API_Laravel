<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\games;

class gameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return games::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'owned' => 'required'
        ]);

        return games::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $game = games::find($id);
        if ($game != null) {
            return $game;
        } else {
            return response()->json([
                'Game not found'], 404
            );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = games::find($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'owned' => 'required'
        ]);
        
        if ($game != null) {
            $game->update($request->all());
            return response()->json([
                'Game updated to:', $game], 200
            );
        } else {
            return response()->json([
                'Game not found'], 404
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = games::find($id);

        if ($game != null) {
            $game->delete();
            return response()->json(['Game deleted from inventory']);
        } else {
            return response()->json([
                'Game not found'], 404
            );
        }
    }
}
