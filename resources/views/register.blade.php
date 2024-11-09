<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #333; color: #fff; }
        .form-container { max-width: 400px; margin: 50px auto; padding: 20px; background-color: #444; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); }
        h2 { text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #ccc; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; background-color: #555; color: #fff; border: 1px solid #666; border-radius: 4px; }
        button { width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; cursor: pointer; border-radius: 4px; font-size: 16px; }
        button:hover { background-color: #0056b3; }
        .error { color: #ff4d4d; margin-top: -10px; margin-bottom: 10px; }
        .success { color: #4CAF50; }
        .link { text-align: center; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                @error('password') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <div class="form-group">
                <label for="type">Register As</label>
                <select name="type" id="type" required>
                    <option value="student" {{ old('type') == 'student' ? 'selected' : '' }}>Student</option>
                    <option value="mentor" {{ old('type') == 'mentor' ? 'selected' : '' }}>Mentor</option>
                </select>
                @error('type') <div class="error">{{ $message }}</div> @enderror
            </div>
            <button type="submit">Register</button>
        </form>
        <p class="link">Already registered? <a href="{{ route('login') }}" style="color: #007bff;">Login here</a>.</p>
    </div>
</body>
</html>
