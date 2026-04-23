@extends('layouts.app')

@section('content')
        <x-sidebar />
        
        <div class="flex-1 p-2">
        <x-navbars />
           
            <x-cards />
              <div class=" flex gap-7">
               <x-sales-report />
            <x-sales-activity />
        </div>
        </div>
      

       
   

   

@endsection