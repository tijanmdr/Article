<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
<h1>Edit article::{{ $article->title }}</h1>
<hr>
<form method="POST" action="/articles/{{$article->excerpt}}">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="title" value="{{ $article->title }}"><br>
    <input type="text" name="body" value="{{ $article->body }}"><br>
    <input type="date" name="published_at" value={{ $article->published_at }}><br>
    <input type="submit" name="Update">
    @include('errors.listErrors')
</form>
<a href="/articles/">Go Back</a>
</body>
</html>