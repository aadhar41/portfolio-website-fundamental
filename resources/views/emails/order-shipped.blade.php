<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <header style="background-color: #007bff; padding: 20px; text-align: center; color: #fff;">
            <h1>{{ config('app.name') }}</h1>
        </header>

        <div style="padding: 20px;">
            <h2>{{ $title }}</h2>
            <p>{!! $content !!}</p>
            <p>{{$post->title}}</p>
            <p>{{$post->description}}</p>

            @if(!empty($buttonText) && !empty($buttonUrl))
                <p>
                    <a href="{{ $buttonUrl }}" style="background-color: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; display: inline-block;">
                        {{ $buttonText }}
                    </a>
                </p>
            @endif
        </div>

        <footer style="background-color: #f4f4f4; padding: 10px; text-align: center; color: #777;">
            &copy; {{ date('Y') }} {{ config('app.name') }}
        </footer>
    </div>
</body>
</html>
