<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Add your custom CSS styles here -->
    <!-- Add your custom CSS styles here -->
    <style>
        /* Custom styles go here */
        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-color: #343a40;
            color: #ffffff;
        }

        .jumbotron h1 {
            font-size: 48px;
        }

        .jumbotron p {
            font-size: 18px;
        }

        .about-content {
            padding: 50px 0;
        }

        .contact-content {
            padding: 50px 0;
        }

        .profile-image {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        /* Custom styles go here */
        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-color: #343a40;
            color: #ffffff;
        }

        .jumbotron h1 {
            font-size: 48px;
        }

        .jumbotron p {
            font-size: 18px;
        }

        .portfolio-item {
            margin-bottom: 30px;
        }

        .portfolio-item img {
            max-width: 100%;
            height: auto;
        }

        /* Custom styles go here */
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>

{{-- Header --}}
@include('layouts.header')

{{-- Main Content --}}
@yield('content')

{{-- Footer --}}
@include('layouts.footer')

<!-- Add Bootstrap JS and jQuery scripts here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
