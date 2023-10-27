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
            <h2>{{ $title }}</h2>
            <div>
                <p>Hello Josephine Gaines,</p>
                <p>We are excited to inform you that your post, titled <b>"{{ Str::headline($post->title) }},"</b> has been published.</p>
                <p>{{ $content }}</p>
                <div class="card">
                    <p class="mb-0">{{ $post->description }}</p>
                </div>
                
                <p>You can view your post by clicking the link below:</p>
                {{-- <a href="{{ route('posts.show', $post->id) }}">View Your Post</a> --}}
                @if(!empty($buttonText) && !empty($buttonUrl))
                    <p>
                        <a href="{{ $buttonUrl }}" style="background-color: <?= env('APP_THEME_BACKGROUND'); ?>; color: <?= env('APP_THEME_TEXT'); ?>; padding: 10px 20px; text-decoration: none; display: inline-block;">
                            {{ $buttonText }}
                        </a>
                    </p>
                @endif
                
                <p>Thank you for sharing your content on our platform. We hope your post receives the attention it deserves!</p>
            </div>

        </div>

        <footer style="background-color: #f4f4f4; padding: 10px; text-align: center; color: #777;">
            &copy; {{ date('Y') }} {{ config('app.name') }}
        </footer>
    </div>
</body>
</html>
