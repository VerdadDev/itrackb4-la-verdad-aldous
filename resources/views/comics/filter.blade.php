<!DOCTYPE html>
<html>
<head>
    <title>Comic Filter</title>
</head>
<body>
    
    <h1>Genre: {{ $genre }}</h1>
    
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic['title'] }}</td>
                    <td>{{ $comic['author'] }}</td>
                    <td>{{ $comic['genre'] }}</td>
                </tr>
            @endforeach
       </tbody>
    </table>
<p><a href="{{ route('comics.index') }}">Back to Comic List</a></p>

</body>
</html>
