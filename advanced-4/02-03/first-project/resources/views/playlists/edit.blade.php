@extends('layouts.app')

@section('title', 'Edit Playlist')

@section('content')
<div class="container w-6/12 mx-auto">
    <h1 class="text-2xl font-bold">Edit Playlist</h1>
    <form action="{{ route('playlists.update', $playlist->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $playlist->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $playlist->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $playlist->genre }}">
        </div>
        @foreach ($tracks as $track)
        <div class="form-group">
            <label for="track">{{ $track->title }}</label>
            <input type="checkbox" class="form-control" id="track" name="tracks[]" value="{{ $track->id }}" {{ $playlist->tracks->contains($track->id) ? 'checked' : '' }}>
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Update</button>
        
    </form>
</div>
@endsection