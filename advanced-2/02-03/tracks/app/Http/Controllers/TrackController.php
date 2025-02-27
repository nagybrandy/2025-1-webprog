<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class TrackController extends Controller
{
    public function index()
    {
        $tracks = Track::allTracks();
        return view('tracks.index', compact('tracks'));
    }
    public function create()
    {
        return view('tracks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'length' => 'required|integer',
            'release_year' => 'required|integer',
        ]);
        
        Track::createTrack($validated);
        return redirect()->route('tracks.index');
    }
}
