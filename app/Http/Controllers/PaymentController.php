<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
{
    $payments = Payment::all();

    return view('payments.index', compact('payments'));
}
    public function store(Request $request)
     {
        $tenant_name = $request->input('tenant_name');
        $unit = $request->input('unit');
        $amount = $request->input('amount');
        $month = $request->input('month');
        $due_date = $request->input('due_date');

        \App\Models\Payment::create([
            'tenant_name' => $tenant_name,
            'unit' => $unit,
            'amount' => $amount,
            'month' => $month,
        ]);
        return redirect()->back()->with('success', 'Payment added!');

     }
}    
