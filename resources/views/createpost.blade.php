<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form method="POST" action="{{ url('postCreate') }}">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <br>
        <div>
            <label for="content">Content:</label>
            <textarea type="text" id="content" name="content" required></textarea>
        </div>
        <br>
        <div><button type="submit">Create Post</button></div>
    </form>
</body>
</html>