<!DOCTYPE html>
<html>
<head>
    <title>Loan Application</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        h2 {
            color: #333;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
@extends('dashboard')

@section('dashboard-content')
    <h2>Loan Application</h2>

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

    <form method="POST" action="/applyloan">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="amount">Loan Amount:</label>
            <input type="number" id="amount" name="amount" required>
        </div>
        
        <div class="form-group">
            <label for="reason">Reason for Loan:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Apply Loan">
        </div>
    </form>
@endsection
</body>
</html>
