<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        div.card {
            border: 1px solid rgba(230, 230, 230, 1);
            border-radius: 3px;
            background: #f4f4f4;
            color: dimgrey;
            text-align: left;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <header style="background-color: <?= env('APP_THEME_BACKGROUND'); ?>; padding: 20px; text-align: center; color: <?= env('APP_THEME_TEXT'); ?>;">
            <h1>{{ config('app.name') }}</h1>
        </header>

        <div style="padding: 20px;">
            <div>
                <p>Hello {{ $user->name }},</p>
                <p>{{ $title }}</p>
                <p>Your registration was successful, and you can now access all the features of our website.</p>
                
                <p>{{ $content }}</p>
                <ul>
                    <li>Logging in to your account</li>
                    <li>Updating your profile information</li>
                    <li>Exploring our awesome features</li>
                </ul>
                
                <p>If you have any questions or need assistance, feel free to contact our support team.</p>
                
                <p>Thank you for joining our community!</p>
            </div>
        </div>

        <footer style="background-color: #f4f4f4; padding: 10px; text-align: center; color: #777;">
            &copy; {{ date('Y') }} {{ config('app.name') }}
        </footer>
    </div>
</body>
</html>
