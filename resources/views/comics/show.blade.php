<!DOCTYPE html>
<html>
<head>
    <title>{{ $comic['title'] }}</title>
</head>
<body>
    <p>Prepared by: Aldous Malvin Verdad</p>
    <h1>{{ $comic['title'] }}</h1>
    <p><strong>Author:</strong> {{ $comic['author'] }}</p>
    <p><strong>Genre:</strong> {{ $comic['genre'] }}</p>
    <p><strong>Chapters:</strong> {{ $comic['chapter'] }}</p>
    <p><strong>Complete:</strong> {{ $comic['is_complete'] ? 'Yes' : 'No' }}</p>

    <p><a href="{{ route('comics.index') }}">Back to Comic List</a></p>
</body>
</html>