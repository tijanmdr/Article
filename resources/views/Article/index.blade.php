<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
<h1>Articles</h1>
<h4><a href="/articles/create/">Create an Article</a></h4>
<hr>

@foreach ($articles as $object)
    <article>
        <h2><a href="/articles/{{$object->excerpt}}">{{ $object->title }}</a></h2>
        <div class="article_body">{{ $object->body }}</div>
        <div class="time" style="text-align: right; padding-right: 30px;"><sub>Published on: {{ $object->published_at }}</sub></div>
    </article>
@endforeach
</body>
</html>