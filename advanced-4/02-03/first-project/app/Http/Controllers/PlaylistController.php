<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Playlist;
use App\Models\Track;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::all();
        foreach ($playlists as $playlist) {
            $playlist->tracks = $playlist->tracks()->get();
            $playlist->tracks_count = $playlist->tracks()->count();
        }
        return view('playlists.index', compact('playlists'));
    }

    public function edit($playlistId)
    {
        $playlist = Playlist::find($playlistId);
        $tracks = Track::all();
        return view('playlists.edit', compact('playlist', 'tracks'));
    }

    public function update(Request $request, $playlistId)
    {
        $playlist = Playlist::find($playlistId);
        $playlist->update($request->all());
        $playlist->tracks()->sync($request->tracks);
        $playlist->save();
        return redirect()->route('playlists.index');
    }

    public function destroy($playlistId)
    {
        $playlist = Playlist::find($playlistId);
        $playlist->delete();
        return redirect()->route('playlists.index');
    }
    
}
