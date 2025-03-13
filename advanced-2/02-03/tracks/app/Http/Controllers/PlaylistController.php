<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Playlist;
use App\Models\Track;
class PlaylistController extends Controller
{
    public function index(){
        $playlists = Playlist::all();
        
        foreach ($playlists as $playlist) {
            $playlist->tracksCount = $playlist->tracks()->count();
        }

        return view('playlists.index', compact('playlists'));
    }
}
