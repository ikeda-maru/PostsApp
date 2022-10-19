@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/example/posts">
    {{ csrf_field() }}
    <input type="text" name="title" value="{{ old('title') }}">
    <input type="text" name="content" value="{{ old('content') }}">
    <input type="submit">
</form>
