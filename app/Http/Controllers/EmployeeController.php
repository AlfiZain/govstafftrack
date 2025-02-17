<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Enums\Orientation;

use function Spatie\LaravelPdf\Support\pdf;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positions = Position::all();
        $units = Unit::all();
        return view('employee.create', compact(['positions', 'units']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validateData = $request->validated();
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('photos', 'public');
                $validateData['photo'] = $photoPath;
            }

            Employee::create($validateData);
        });
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {

        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $positions = Position::all();
        $units = Unit::all();
        return view('employee.edit', compact(['employee', 'positions', 'units']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        DB::transaction(function () use ($request, $employee) {
            $validateData = $request->validated();
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('photos', 'public');
                $validateData['photo'] = $photoPath;
            }

            $employee->update($validateData);
        });
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::transaction(function () use ($id) {
            $employee = Employee::find($id);
            $employee->delete();
        });
        return redirect()->route('employee.index');
    }

    public function print()
    {
        $employees = Employee::all();
        return pdf()
            ->view('employee.print', compact('employees'))
            ->name('Data Pegawai ' . now() . '.pdf')
            ->format(Format::A4)
            ->orientation(Orientation::Landscape)
            ->download();
    }
}
