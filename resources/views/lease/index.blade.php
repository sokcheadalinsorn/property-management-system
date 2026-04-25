<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>leases for testing store data</title>
</head>

<body>
    <form action="{{route('leases.store')}}" method="post">
        @csrf
        <div class="py-5 px-5 m-5 bg-slate-400 rounded-sm border-spacing-2" >
            <label for="">email</label>
            <input type="email" name="email" id="email" placeholder="email"> <br>

            <label for="">password</label>
            <input type="password" name="password" id="password"> <br>
            <button type="submit">submit</button>
        </div>
    </form>
</body>
</html>