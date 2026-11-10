<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - POS System</title>
</head>
<body>
    <h1>Edit User</h1>

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

    <form action="{{ route('users.update', $user) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <p>
            <label>Username</label><br>
            <input type="text" name="username"
                   value="{{ old('username', $user->username) }}" required>
        </p>

        <p>
            <label>Full Name</label><br>
            <input type="text" name="full_name"
                   value="{{ old('full_name', $user->full_name) }}" required>
        </p>

        <p>
            <label>Avatar</label><br>
            @if ($user->avatar)
                <img src="{{ asset('storage/' . $user->avatar) }}"
                     alt="Current avatar"
                     width="100"><br>
            @endif

            <input type="file" name="avatar" accept="image/*">
        </p>

        <button type="submit">Update User</button>
    </form>
</body>
</html>