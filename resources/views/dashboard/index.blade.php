@extends('layouts.app')

@section('content')
        <x-sidebar />
        
        <div class="flex-1 p-2">
        <x-navbars />
           
            <x-cards />
             <x-sales-report />
            <x-sales-activity />
        </div>

       
   

   

@endsection