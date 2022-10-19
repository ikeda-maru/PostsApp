<form method="POST" action="/example/posts">
    {{ csrf_field() }}
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit">
</form>
