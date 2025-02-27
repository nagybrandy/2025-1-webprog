
@extends('layouts.app')

@section('content')
    <form action="{{ route('tracks.store') }}" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="artist">Artist</label>
            <input type="text" name="artist" id="artist">
        </div>
        <div>
            <label for="album">Album</label>
            <input type="text" name="album" id="album">
        </div>
        <div>
            <label for="length">Length</label>
            <input type="text" name="length" id="length">
        </div>
        <div>
            <label for="release_year">Release Year</label>
            <input type="text" name="release_year" id="release_year">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection

