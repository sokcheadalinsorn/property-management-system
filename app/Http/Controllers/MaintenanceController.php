<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenances = Maintenance::all();
        return view('maintenance.index', compact('maintenances'));
    }
    public function store(Request $request)

    {
     $title = $request->input('titel');
     $description = $request->input('description');
     $status = $request->input('status');
    }
}
