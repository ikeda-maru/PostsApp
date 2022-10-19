@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ url('/example', $post->id) }}">
    @method('PUT')
    {{ csrf_field() }}
    <input type="text" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
    <input type="text" name="content" value="{{ old('content') == '' ? $post->content : old('content') }}">
    <input type="submit">
</form>
