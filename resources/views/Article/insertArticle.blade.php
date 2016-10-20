<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
<h1>Insert an article</h1>
<hr>
<form method="POST" action="/articles">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="user_id" value=1>
    <input type="text" name="title"><br>
    <input type="text" name="body"><br>
    <input type="date" name="published_at" value={{ date('Y-m-d') }}><br>
    <input type="text" name="excerpt"><br>
    <input type="submit" name="submit">
    @include('errors.listErrors')
</form>
<a href="/articles/">Go Back</a>
</body>
</html>