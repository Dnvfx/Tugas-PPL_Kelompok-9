<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management</title>
</head>
<body>
    <h1>Contact Management</h1>

    <h2>Create Contact</h2>
    <form action="/contacts" method="POST">
        @csrf
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br><br>
        <button type="submit">Create Contact</button>
    </form>

    <h2>Update Contact</h2>
    <form action="/contacts/{contact_id}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name_update">First Name:</label><br>
        <input type="text" id="first_name_update" name="first_name"><br>
        <label for="last_name_update">Last Name:</label><br>
        <input type="text" id="last_name_update" name="last_name"><br>
        <label for="email_update">Email:</label><br>
        <input type="email" id="email_update" name="email"><br>
        <label for="phone_update">Phone:</label><br>
        <input type="text" id="phone_update" name="phone"><br><br>
        <button type="submit">Update Contact</button>
    </form>

    <h2>Get Contact</h2>
    <form action="/contacts/{contact_id}" method="GET">
        @csrf
        <button type="submit">Get Contact</button>
    </form>

    <h2>Search Contact</h2>
    <form action="/contacts/search" method="POST">
        @csrf
        <label for="search_term">Search Term:</label><br>
        <input type="text" id="search_term" name="search_term"><br><br>
        <button type="submit">Search</button>
    </form>

    <h2>Remove Contact</h2>
    <form action="/contacts/{contact_id}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Remove Contact</button>
    </form>
</body>
</html>
