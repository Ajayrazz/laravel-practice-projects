<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 250px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card a {
            text-decoration: none;
            color: inherit;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card h2 {
            padding: 15px;
            margin: 0;
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Popular Destinations</h1>
    <div class="container">
        @foreach($destinations as $id => $dest)
        <div class="card">
            <a href="/destination/{{$id}}">
                <img src="{{asset($dest['image'])}}" alt="{{$dest['name']}}">
                <h2>{{$dest['name']}}</h2>
            </a>
        </div>
        @endforeach
    </div>
</body>
</html>
