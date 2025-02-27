
@extends('layouts.app')

@section('content')
    <h1>Tracks</h1>
    <ul>
        @foreach ($tracks as $track)
            <li>{{ $track->name }} - {{ $track->artist }} - {{ $track->album }} - {{ $track->length }} - {{ $track->release_year }}</li>
        @endforeach
    </ul>
@endsection

