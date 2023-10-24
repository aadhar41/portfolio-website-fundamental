<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Route Not Found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #fff;
        }
        .row {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 70vh;
            width: 50%;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #e74c3c;
        }
        .error-message {
            font-size: 24px;
            margin-top: 20px;
        }
        .home-link {
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            font-size: 18px;
        }
        .animation-container {
            margin-top: 20px;
            position: relative;
        }
        .road {
            width: 100px;
            height: 10px;
            background-color: #555;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .car {
            width: 40px;
            height: 20px;
            background-color: #e74c3c;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 5px;
            animation: carMove 2s linear infinite;
        }
        @keyframes carMove {
            0% {
                left: -60px;
            }
            100% {
                left: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="error-code">404</div>
            <div class="error-message">Not Found</div>
            <a href="/" class="home-link">Go to Home</a>
            <div class="animation-container">
                <div class="road"></div>
                <div class="car"></div>
            </div>
        </div>
    </div>
</body>
</html>
