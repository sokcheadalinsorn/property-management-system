<?php
namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Store;

class PropertyController extends Controller
{   
    public function index(){
        return view('property.index');
    }
    public function store(Request $request){
        $email = $request->input('email');
        dd($email);
    }
    
}





