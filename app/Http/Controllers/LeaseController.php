<?php

namespace App\Http\Controllers;

use App\Models\Lease;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function index()
    {
        return view('lease.index');
    }
    public function store(Request $request)
    {
        $email = $request->input('email');
        dd($email);
    }
}
