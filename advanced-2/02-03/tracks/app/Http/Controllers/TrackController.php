<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Playlist;
use Illuminate\Support\Facades\Log;
class TrackController extends Controller
{

    public function create()
    {
        return view('tracks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'album' => 'nullable|string|max:255',
            'length' => 'required|integer|min:1',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        Track::create($request->all());
        
        return redirect()->route('tracks.viewTracks')->with('success', 'Track created successfully!');
    }
    public function viewTracks()
    {
        $tracks = Track::allTracks();
        if(isset($_GET['playlist_id'])) {
            $playlist =  Playlist::find(intval($_GET['playlist_id']));
            $tracks = $playlist->tracks;
            $tracks->playlist = $playlist;
        } else {
            $tracks = Track::allTracks();
        }
        return view('tracks.index', compact('tracks'));
    }

    public function delete($id)
    {
        $track = Track::find($id);
        $track->delete();
        return redirect()->route('tracks.viewTracks')->with('success', 'Track deleted successfully!');
    }

    public function edit($id)
    {
        $track = Track::find($id);
        return view('tracks.edit', compact('track'));
    }

    public function update(Request $request, $id)
    {
        $track = Track::find($id);
        $track->update($request->all());
        return redirect()->route('tracks.viewTracks')->with('success', 'Track updated successfully!');
    }
}
