<!DOCTYPE html>
<html>
<head>
    <title>Daily Digest</title>
</head>
<body>
    <h1>Top Posts</h1>
    @foreach($posts as $post)
        <h2><b>Title: </b>{{ $post->title }}</h2>
        <p><b>Body: </b>{{ $post->body }}</p>
    @endforeach
</body>
</html>
