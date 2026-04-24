<?php

namespace App\Http\Controllers;

use App\Models\Lease;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function index()
    {      
        $leases = Lease::all();
        return view('lease.index', compact('leases'));
    }

    public function show($id)
    {

    }

    public function store(Request $request)
    {
        $tenant_name = $request->input('tenant_name');
        $unit = $request->input('unit');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $monthly_rent = $request->input('monthly_rent');
        $desposit = $request->input('desposit');
        
        // save to database
        \App\Models\Lease::create([
            'tenant_name' => $tenant_name,
            'unit' => $unit,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'monthly_rent' => $monthly_rent,
            'desposit' => $desposit,
           
        ]);

        return redirect()->back()->with('success', 'Lease added!');
    }
}
