<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PPL KELOMPOK 9</title>
</head>
<body>
    <h1>TUGAS PPL KELOMPOK 9</h1>

    <h2>Create New Address</h2>
    <form action="/addresses" method="POST">
        @csrf
        <label for="street">Street:</label><br>
        <input type="text" id="street" name="street"><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="province">Province:</label><br>
        <input type="text" id="province" name="province"><br>
        <label for="country">Country:</label><br>
        <input type="text" id="country" name="country"><br>
        <label for="postal_code">Postal Code:</label><br>
        <input type="text" id="postal_code" name="postal_code"><br><br>
        <button type="submit">Create Address</button>
    </form>

    <!-- Add more HTML for other functionalities if needed -->
</body>
</html>
