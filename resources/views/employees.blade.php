<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Employee</h2>

    <form action="/employees" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br><br>

        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" required><br><br>

        <button type="submit">Add Employee</button>
    </form>
</body>
</html>