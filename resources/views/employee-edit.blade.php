<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Employee</h2>

    <form action="/employees/update/{{ $employee->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $employee->name }}" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="{{ $employee->department }}" required><br><br>

        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" value="{{ $employee->salary }}" required><br><br>

        <button type="submit">Update Employee</button>
    </form>
</body>
</html>