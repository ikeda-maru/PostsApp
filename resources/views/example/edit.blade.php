<form method="POST" action="{{ url('/example', $post->id) }}">
    @method('PUT')
    {{ csrf_field() }}
    <input type="text"   name="title"   value="{{ $post->title }}">
    <input type="text"   name="content" value="{{ $post->content }}">
    <input type="submit">
</form>
