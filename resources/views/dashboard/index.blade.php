<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   @extends('layouts.app')

@section('content')
        <x-sidebar />
        
        <div class="flex-1 p-2">
        <x-navbars />
           
            <x-cards />

        <div class=" flex gap-7  "> 
               <x-sales-report />
            <x-sales-activity />
           
        </div>

        <div class=" flex gap-7">
         <x-recent-payment />
          <x-maintenance-request />
         </div>
        </div>
@endsection 
</body>
</html>
