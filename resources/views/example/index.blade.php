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
    <p><a href="/example/{{ $post->id }}">{{ $post->title }}</a>
    <a href="/example/{{ $post->id }}/edit">更新</a></p>

    <form action="{{ url('/example', $post->id) }}" method="POST" onsubmit="if(confirm('削除してもいいですか?')) { return true } else {return false };">
        @method('DELETE')
        {{ csrf_field() }}
        <button type="submit">削除</button>
    </form>
    <hr>
    @endforeach

<a href="{{url('/example/create')}}">New Post</a>
</body>
</html>
