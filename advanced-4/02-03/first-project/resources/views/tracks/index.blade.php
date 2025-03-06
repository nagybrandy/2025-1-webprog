
@extends('layouts.app')

@section('content')
<div class="container p-10 mx-auto">   
    <h1 class="text-4xl font-bold">Tracks    <a href="{{ route('tracks.create') }}" class="btn btn-primary">Create</a>
    </h1>
    <div class="grid grid-cols-4 gap-4 my-10">
        @foreach ($tracks as $track)
        <div class="shadow-xl bg-primary text-primary-content card bg-base-100">
            <div class="p-6 card-body">
              <h2 class="card-title">{{ $track->title }} - {{ $track->artist }}</h2>
              <p>{{ $track->description }}</p>
              <div class="flex justify-between p-0">
                  <div class="badge badge-secondary">Album 1</div>
                  <div class="badge badge-neutral">{{$track->duration}} seconds</div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
    </div>
@endsection
