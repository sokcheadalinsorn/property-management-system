<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index()
    {   
        $name = 'dalin';
        return view ('rent.index', compact('name') );
    }
}
