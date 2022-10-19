<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Example</title>
</head>
<body>
    <h1>Posts</h1>

@foreach($posts as $post)
    <p><a href="{{ url('/example', $post->id) }}">{{ $post->title }}</a>
    <a href="{{ url('/example', [$post->id, 'edit']) }}">更新</a></p>
@endforeach

<a href="{{url('/example/create')}}">New Post</a>
</body>
</html>
