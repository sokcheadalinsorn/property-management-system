<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
{
    $thePayment = Payment::all();
    
    return view('payment.index', compact('thePayment'));
}
    public function store(Request $request)
     {   
        $tenant_name = $request->input('tenant_name');
        $unit = $request->input('unit');
        $amount = $request->input('amount');
        $month = $request->input('month');
        $due_date = $request->input('due_date');

        Payment::create([
            'tenant_name' => $tenant_name,
            'unit' => $unit,
            'amount' => $amount,
            'month' => $month,
            'due_date' => $due_date,
            'lease_id' => $request->lease_id,

        ]);
        return redirect()->back()->with('success', 'Payment added!');

     }
}    
