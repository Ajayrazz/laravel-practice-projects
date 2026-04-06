<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h2>Registration Form</h2>

    <form action="/submit-form" method="POST">
        @csrf

        <h1>Student Registration Form</h1>

        @if($errors->any())
            <div style="color: red; border: 1px solid red; padding: 10px;">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="username">Full Name:</label><br>
        <input type="text" name="username" value="{{ old('username') }}" required><br><br>
        @error('username')
            <p style="color: red;">{{ $message }}</p>
        @enderror  

        <label for="email">Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>
        @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>
        @error('password')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <button type="submit">Register</button>

    </form>

</body>
</html>