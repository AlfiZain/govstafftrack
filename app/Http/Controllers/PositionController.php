<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePositionRequest;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::all();
        return view('position.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePositionRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validateData = $request->validated();

            Position::create($validateData);
        });
        return redirect()->route('position.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {

        return view('position.show', compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        return view('position.edit', compact('positions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePositionRequest $request, Position $position)
    {
        DB::transaction(function () use ($request, $position) {
            $validateData = $request->validated();

            $position->update($validateData);
        });
        return redirect()->route('position.show', $position);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::transaction(function () use ($id) {
            $position = Position::find($id);
            $position->delete();
        });
        return redirect()->route('position.index');
    }
}
