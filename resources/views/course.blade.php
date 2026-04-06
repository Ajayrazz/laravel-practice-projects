<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 30px;
            max-width: 600px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .detail {
            margin: 15px 0;
            font-size: 16px;
        }
        .detail label {
            font-weight: bold;
            color: #666;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-link:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{$course['name']}}</h1>
        <div class="detail">
            <label>Duration:</label>
            <p>{{$course['duration']}}</p>
        </div>
        <div class="detail">
            <label>Fee:</label>
            <p>₹{{$course['fee']}}</p>
        </div>
        <a href="/courses" class="back-link">Back to Courses</a>
    </div>
</body>
</html>
