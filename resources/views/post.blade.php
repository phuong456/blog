<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
</head>

<body>
    <h1>The Post List</h1>
    <h3><a href="{{ url('create') }}">Create Post</a></h3>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <small>Create At: {{ $post->created_at }}</small>
        </div>
        <hr>
    @endforeach
</body>

</html>
