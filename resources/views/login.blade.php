<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #000; 
            color: #fff; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0;
        }
        .form-container { 
            max-width: 400px; 
            padding: 20px; 
            background-color: #1a1a1a; 
            border-radius: 8px; 
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); 
        }
        .form-group { 
            margin-bottom: 15px; 
        }
        label { 
            display: block; 
            margin-bottom: 5px; 
            color: #ccc; 
        }
        input { 
            width: 100%; 
            padding: 10px; 
            background-color: #333; 
            color: #fff; 
            border: 1px solid #555; 
            border-radius: 4px; 
            box-sizing: border-box;
        }
        button { 
            width: 100%; 
            padding: 10px; 
            background-color: #555; 
            color: #fff; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-weight: bold;
        }
        button:hover { 
            background-color: #777; 
        }
        .form-container h2 { 
            text-align: center; 
            color: #fff; 
            margin-bottom: 20px; 
        }
        a { 
            color: #ccc; 
            text-decoration: none; 
        }
        a:hover { 
            text-decoration: underline; 
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p style="text-align:center; margin-top: 15px;">Not registered? <a href="{{ route('register') }}">Sign up here</a>.</p>
    </div>
</body>
</html>
