@extends('layouts.app')
@section('title', 'Playlists')
@section('content')
    <h1 class="w-8/12 mx-auto my-4 mb-6 text-4xl font-bold">Playlists</h1>
    <ul class="w-8/12 mx-auto text-xs shadow-md list bg-base-100 rounded-box">
          
        @foreach ($playlists as $playlist)
        <li class="list-row">
          <div class="text-4xl font-thin opacity-30 tabular-nums">{{ $playlist->id }}</div>
          <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/1@94.webp"/></div>
          <div class="list-col-grow">
            <div>{{ $playlist->name }}</div>
            <div class="text-xs font-semibold uppercase opacity-60">{{ $playlist->description }}</div>
          </div>
          <div class="flex flex-col justify-center text-xs italic font-semibold opacity-60">
            <div>Number of tracks: {{ $playlist->tracksCount }}</div>
            </div>
          <a class="btn btn-square btn-ghost" href="{{ route('tracks.viewTracks', ["playlist_id" => $playlist->id]) }}">
            <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
          </a>
        </li>
        @endforeach
      </ul>
              
      </ul>
@endsection

