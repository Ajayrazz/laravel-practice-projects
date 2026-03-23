<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #3490dc;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            width: 400px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile-img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .info {
            text-align: left;
            margin-top: 15px;
        }
        .info p {
            margin: 8px 0;
        }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #38c172;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .dummy {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Student Profile</h2>
</div>

<div class="container">
    <img src="https://via.placeholder.com/100" class="profile-img" alt="Profile Image">
    
    <div class="info">
        <p><strong>Name:</strong> Ajay Kumar</p>
        <p><strong>Course:</strong> B.Tech CSE</p>
        <p><strong>Year:</strong> 3rd Year</p>
        <p><strong>Email:</strong> ajay@example.com</p>
    </div>

    <button>Edit Profile</button>

    <!-- Dummy Section -->
    <div class="dummy">
        <p><strong>Note:</strong></p>
        <p>This is a sample student profile page.</p>
        <p>You can replace data dynamically using backend.</p>
    </div>
</div>

</body>
</html>