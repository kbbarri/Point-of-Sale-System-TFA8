<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - POS System</title>
</head>
<body>
    <h1>Point of Sale System</h1>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers.index') }}">Customer Accounts</a> |
        <a href="{{ route('users.index') }}">User Accounts</a>
    </nav>

    <hr>

    <h2>Welcome to Our POS System</h2>
    <p>This is the landing page of our Point of Sale application.</p>
    <p>Use the navigation links above to explore the system.</p>
</body>
</html>