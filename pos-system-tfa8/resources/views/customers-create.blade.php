<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer - POS System</title>
</head>
<body>
    <h1>Add Customer</h1>

    <p>
        <a href="{{ route('customers.index') }}">Back to Customers</a>
    </p>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf

        <p>
            <label>Full Name</label><br>
            <input type="text" name="full_name"
                   value="{{ old('full_name') }}" required>
        </p>

        <p>
            <label>Email</label><br>
            <input type="email" name="email"
                   value="{{ old('email') }}" required>
        </p>

        <p>
            <label>Phone</label><br>
            <input type="text" name="phone"
                   value="{{ old('phone') }}">
        </p>

        <button type="submit">Save Customer</button>
    </form>
</body>
</html>