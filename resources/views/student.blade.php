<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f8;
            text-align: center;
            padding-top: 50px;
        }
        .container {
            background: #fff;
            padding: 25px;
            width: 350px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .info {
            text-align: left;
            margin-top: 15px;
        }
        .info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Details</h2>

    <div class="info">
        <p><strong>Name:</strong> {{ $student['name'] }}</p>
        <p><strong>Registration No:</strong> {{ $student['reg_no'] }}</p>
        <p><strong>Course:</strong> {{ $student['course'] }}</p>
        <p><strong>Year:</strong> {{ $student['year'] }}</p>
    </div>
</div>

</body>
</html>