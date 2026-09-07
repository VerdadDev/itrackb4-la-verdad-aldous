@extends('layouts.app')

@section('title', 'Show Comics')

@section('content')

    <h4>Comic: {{ $comic['title'] }}</h4>
    <p><strong>Author:</strong> {{ $comic['author'] }}</p>
    <p><strong>Genre:</strong> {{ $comic['genre'] }}</p>
    <p><strong>Chapters:</strong> {{ $comic['chapter'] }}</p>
    <p><strong>Complete:</strong> {{ $comic['is_complete'] ? 'Yes' : 'No' }}</p>

    <button><a href="{{ route('comics.index') }}">Back</a></button>
    
@endsection