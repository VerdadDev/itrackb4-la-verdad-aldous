@extends('layouts.app')

@section('title', 'Filter Comics')

@section('content')
    
    @if ($genre === null)
    <h4>Genre: All</h4>
    @else
    <h4>Genre: {{ $genre }}</h4>
    @endif

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $comic['title'] }}</td>
                    <td>{{ $comic['author'] }}</td>
                    <td>{{ $comic['genre'] }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No comics found for this genre.</td>
                </tr>
            @endforelse
       </tbody>
    </table>

<button><a href="{{ route('comics.index') }}">Back</a></button>

@endsection
