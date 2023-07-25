<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact Us</title>
    <style>
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
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
      color: #333333;
    }

    .contact-form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #333333;
    }

    .form-group input,
    .form-group textarea {
      width: 95%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 4px;
    }

    .form-group textarea {
      height: 100px;
    }

    .form-group input[type="submit"] {
      width: auto;
      padding: 10px 20px;
      background-color: #4caf50;
      border: none;
      color: #ffffff;
      font-weight: bold;
      cursor: pointer;
      border-radius: 4px;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    .form-group input[type="submit"]:focus {
      outline: none;
    }

    .success-message {
      text-align: center;
      color: #4caf50;
    }

    .error-message {
      text-align: center;
      color: #ff0000;
    }
  </style>
</head>
<body>
@include('navbar')
    <h1>contact Us </h1>
    
    <div class="container">
    <form class="contact-form" action="submit_form.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
  @include('footer')
</body>
</html>