<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hii</h1>
    <form  action="{{route('properties.store')}}" method="post">
        @csrf
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="fname">Email</label>
        <input type="email" name="email" id="email"> <br><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>