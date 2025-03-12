
@extends('layouts.app')

@section('content')
@if (session('success'))
    <div class="toast">
        <div class="alert alert-success">
          <span>{{ session('success') }}</span>
        </div>
      </div>
      <script>
        setTimeout(() => {
            document.querySelector('.toast').remove();
        }, 3000);
      </script>
@endif
    <h1 class="w-8/12 mx-auto my-4 mb-6 text-4xl font-bold">Tracks</h1>
    <div class="w-8/12 pr-3 mx-auto my-4 overflow-x-auto h-96">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
               <th>Name</th>
               <th>Artist</th>
               <th>Album</th>
               <th>Length</th>
               <th>Release Year</th>
               <th>
               </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tracks as $track)
            <tr class="hover:bg-base-300">
              <th>{{ $track->id }}</th>
              <td>{{ $track->name }}</td>
              <td>{{ $track->artist }}</td>
              <td>{{ $track->album }}</td>
              <td>{{ $track->length }}</td>
              <td>{{ $track->release_year }}</td>
              <td>
                <form action="{{ route('tracks.delete', $track->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="w-full btn btn-error btn-xs">Delete</button>
                </form>
                <a href="{{ route('tracks.edit', $track->id) }}" class="w-full btn btn-warning btn-xs">Edit</a>
              </td>
            </tr>
            @endforeach
           
          </tbody>
        </table>
      </div>
@endsection

