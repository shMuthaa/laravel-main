<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    
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
        
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        
        .forgot-password a {
            color: #666;
            text-decoration: none;
        }
        
        .forgot-password a:hover {
            color: #000;
        }
    </style>
</head>
<body>
@include('navbar')

@if(session()->has('success'))
    <style>
        .popup {
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }
    </style>

    <div class="popup">
        {{ session('success') }}
    </div>

    <script>
        window.onload = function() {
            document.querySelector('.popup').addEventListener('click', function() {
                this.style.display = 'none';
            });
        }
    </script>
@endif



    
    <div class="container">
        <h1>Login</h1>
        <form action='/login' method='POST'>
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
            
            <div class="forgot-password">
                <a href="/forgot">Forgot password?</a>
            </div>
        </form>
    </div>
    @include('footer')
</body>
</html>
