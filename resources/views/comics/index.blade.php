<!DOCTYPE html>
<html>
<head>
    <title>My Comic List</title>
</head>
<body>
    
    <h1>My Comic List</h1>
    <p>Prepared by: Aldous Malvin Verdad</p>
 
    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Chapters</th>
            <th>Complete</th>
        </tr>
 
        @foreach ($comics as $comic)
            <tr>
                <td><a href="{{ route('comics.show', [$comic['id']]) }}">{{ $comic['title'] }}</a></td>
                <td><a href="{{ route('comics.show', [$comic['id']]) }}">{{ $comic['author'] }}</a></td>
                <td><a href="{{ route('comics.filter', [$comic['genre']]) }}">{{ $comic['genre'] }}</a></td>
                <td><a href="{{ route('comics.show', [$comic['id']]) }}">{{ $comic['chapter'] }}</a></td>
                <td><a href="{{ route('comics.show', [$comic['id']]) }}">{{ $comic['is_complete'] ? 'Yes' : 'No' }}</a></td>           
            </tr>
        @endforeach
    </table>
</body>

