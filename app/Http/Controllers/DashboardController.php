<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use App\Models\Unit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $employees = Employee::count();
        $positions = Position::count();
        $units = Unit::count();
        return view("dashboard", compact(["employees", "positions", "units"]));
    }
}
