<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$destination['name']}}</h1>
    <img src="{{asset($destination['image'])}}" width="400px">
    <p>{{$destination['description']}}</p>
</body>
</html>