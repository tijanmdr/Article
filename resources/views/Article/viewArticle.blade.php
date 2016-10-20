<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
<h1>{{ $article->title }}</h1>
<article>
    {{ $article->body }}
</article>
<div>Published At: {{ $article->published_at }}</div>
<a href="{{ $article->excerpt }}/edit">Edit Article</a> | <a href="/articles/">Go Back</a>
</body>
</html>