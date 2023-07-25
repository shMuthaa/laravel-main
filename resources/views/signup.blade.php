<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        form {
            display: flex;
            flex-direction: column;
        }
        
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    
</head>
<body>
@include('navbar')

    <h1>Register Now</h1>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="/process_register" method="POST" >
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror

            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
            
            <input type="submit" name="sign up" value="Sign Up">
        </form>
    </div>
    @include('footer')
</body>
</html>
