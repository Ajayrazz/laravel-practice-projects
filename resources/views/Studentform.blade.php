<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h2>Student Form</h2>
    <form action="/student/store" method="POST"> 
        @csrf

        <label>Name:</label>
  <input type="text" name="username">

  <label>Email:</label>
  <input type="email" name="email">

  <button type="submit">Submit</button>
    </form>
</body>
</html>