<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - POS System</title>
</head>
<body>
    <h1>Add User</h1>

    <p>
        <a href="{{ route('users.index') }}">Back to Users</a>
    </p>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <p>
            <label>Username</label><br>
            <input type="text" name="username"
                   value="{{ old('username') }}" required>
        </p>

        <p>
            <label>Full Name</label><br>
            <input type="text" name="full_name"
                   value="{{ old('full_name') }}" required>
        </p>

        <button type="submit">Save User</button>
    </form>
</body>
</html>