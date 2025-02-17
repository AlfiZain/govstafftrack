<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnitRequest;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();
        return view('unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validateData = $request->validated(); // Bisa sesuaikan dengan validasi form

            Unit::create($validateData);
        });
        return redirect()->route('unit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        return view('unit.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        return view('unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUnitRequest $request, Unit $unit)
    {
        DB::transaction(function () use ($request, $unit) {
            $validateData = $request->validated(); // Bisa sesuaikan dengan validasi form

            $unit->update($validateData);
        });
        return redirect()->route('unit.show', $unit);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::transaction(function () use ($id) {
            $unit = Unit::find($id);
            $unit->delete();
        });
        return redirect()->route('unit.index');
    }
}
