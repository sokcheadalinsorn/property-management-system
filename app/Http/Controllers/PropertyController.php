<?php
namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use League\Uri\FeatureDetection;

class PropertyController extends Controller
{ 
    public function index(){
        $properties = Property::all();
        return view('property.index', compact('properties'));
        
    }
        
    
    public function store(Request $request)
    {
    
        $building = $request->input('building');
        $unit = $request->input('unit');
        $type = $request->input('type');
        $size = $request->input('size');
        $rent = $request->input('rent');
        $status = $request->input('status');
        
        // save to database
        \App\Models\Property::create([
            'building' => $building, 
            'unit' => $unit,
            'type' => $type,
            'size' => $size,
            'rent' => $rent,
            'status' => $status,
            
        ]);

        return redirect()->back()->with('success', 'Property added!');
    }
    
}





