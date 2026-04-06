<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($courses as $id => $course)
        <div class="card">
            <h2>{{$course['name']}}</h2>
            <a href="/courses/{{$id}}">View Details</a>
        </div>
        @endforeach
    </div>
</body>
</html>