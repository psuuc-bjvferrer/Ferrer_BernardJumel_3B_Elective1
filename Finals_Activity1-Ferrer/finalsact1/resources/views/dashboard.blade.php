<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .logout-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .logout-form {
            padding: 20px; 
        }
    </style>
</head>


<body>
<h1>Welcome to the Dashboard!</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
</body>
</html>