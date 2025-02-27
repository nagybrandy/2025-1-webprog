
@extends('layouts.app')

@section('content')

@if (session('success'))
<p class="success">{{ session('success') }}</p>
@endif

<form action="{{ route('tracks.store') }}" method="POST">
    @csrf

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="artist">Artist:</label>
    <input type="text" id="artist" name="artist" required>

    <label for="album">Album (optional):</label>
    <input type="text" id="album" name="album">

    <label for="length">Length (in seconds):</label>
    <input type="number" id="length" name="length" required>

    <label for="release_year">Release Year:</label>
    <input type="number" id="release_year" name="release_year" required>

    <button type="submit">Create Track</button>
</form>
    </form>
@endsection

