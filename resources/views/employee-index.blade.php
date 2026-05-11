<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Employee List</h2>
    <a href="/employees/create">Add Employee</a>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Salary</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->salary }}</td>

            <td>
                <a href="/employees/edit/{{ $employee->id }}">Edit</a>
                <a href="/employees/delete/{{ $employee->id }}" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>