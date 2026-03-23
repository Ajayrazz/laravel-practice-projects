<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            text-align: center;
            padding-top: 50px;
        }
        .container {
            background: #fff;
            padding: 30px;
            width: 350px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="number"] {
            padding: 10px;
            width: 80%;
            margin: 10px 0;
        }
        button {
            padding: 10px 20px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .dummy {
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Grade Calculator</h2>

    <!-- Form -->
    <form method="GET" action="/test1">
        <input type="number" name="marks" placeholder="Enter marks (0-100)" required>
        <br>
        <button type="submit">Get Grade</button>
    </form>

    <!-- Result Section -->
    @if(isset($grade))
        <div class="result">
            Your Grade: {{ $grade }}
        </div>
    @endif

    <!-- Dummy Data for Testing -->
    <div class="dummy">
        <p><strong>Test Examples:</strong></p>
        <p>95 → A</p>
        <p>80 → B</p>
        <p>60 → C</p>
        <p>40 → D</p>
    </div>
</div>

</body>
</html>