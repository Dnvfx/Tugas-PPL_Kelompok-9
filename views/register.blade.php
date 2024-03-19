<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>

    <form action="/register" method="POST">
        @csrf

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
