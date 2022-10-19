@if (session('message'))
    {{ session('message') }}
@endif

{{ $post->title }}
{{ $post->content }}

<p><a href="/example/{{ $post->id }}/edit">更新</a></p>
<p><a href="/example/">TOPへ</a></p>
