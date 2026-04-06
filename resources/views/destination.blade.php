<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <img src="{{asset($destination['image'])}}" alt="{{$destination['name']}}">
        <h2>{{$destination['name']}}</h2>
        <a href="/destinations">Back to Destinations</a>
    </div>
</body>
</html>