<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>

    @if($errors->any())
    <div style="color:red; border:1px solid red; padding:10px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="/students/store">
        @csrf

        <label>Enter Username</label>
        <input type="text" name="username" value="{{ old('username') }}">
        @error('username')
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br>

        <label>Enter Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br>

        <label>Enter Password</label>
        <input type="password" name="password">
        @error('password')
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br>

        <select name="course">
            <option value="">Select Course</option>
            <option value="BCA" {{ old('course') == 'BCA' ? 'selected' : '' }}>BCA</option>
            <option value="MCA" {{ old('course') == 'MCA' ? 'selected' : '' }}>MCA</option>
            <option value="BBA" {{ old('course') == 'BBA' ? 'selected' : '' }}>BBA</option>

        <label>Enter Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <span style="color:red">{{ $message }}</span>
        @enderror
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>