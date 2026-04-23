<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PHPUnit\Framework\Constraint\IsEqualWithDelta;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();
        return view ('tenant.index', compact('tenants'));
    }

    public function store(Request $request) {
        $full_name = $request->input('full_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $unit = $request->input('unit');
        $lease_start = $request->input('lease_start');
        $lease_end = $request->input('lease_end'); 
        
        // save to database
        \App\Models\Lease::create([
            'full_name' => $full_name,
            'email' => $email,
            'phone' => $phone,
            'unit' => $unit,
            'lease_start' => $lease_start,
            'lease_end' => $lease_end,
        ]);

        return redirect()->back()->with('sucess', 'Tenant added!');
    }
}

