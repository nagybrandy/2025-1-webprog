import { PlaylistForm } from "./PlaylistForm";
import { PlaylistList } from "./PlaylistList";
import { TrackList } from "./TrackList";
import { TrackDetails } from "./TrackDetails";
import { examplePlaylists } from "../../domain/playlist";
import { exampleTracks } from "../../domain/track";
import { useState } from "react";
import { useParams } from "react-router";

export const Playlists = () => {
  const {plid, trid} = useParams()
  console.log(plid, trid)
  const [selectedPlaylistId, setSelectedPlaylistId] = useState(parseInt(plid) || 1)
  const [selectedTrackId, setSelectedTrackId] = useState(parseInt(trid) || 1)
  const playlists = examplePlaylists;
  
  const selectedPlaylist = playlists.find((pl) => pl.id === selectedPlaylistId);
  const selectedTrack = selectedPlaylist.tracks[selectedTrackId-1];

  return (
    <div>
      <div className="pb-3 pr-3 mt-5 md:flex">
        <div className="w-full p-2 overflow-hidden md:w-4/12 h-80">
          <PlaylistList playlists={playlists} setSelectedPlaylistId={setSelectedPlaylistId} selectedPlaylistId={selectedPlaylistId} />
        </div>
        <div className="w-full p-2 md:w-8/12 h-80">
          <TrackList selectedPlaylist={selectedPlaylist} setSelectedTrackId={setSelectedTrackId} selectedTrackId={selectedTrackId}/>
        </div>

      </div>
      <div className="px-3">
        <TrackDetails selectedTrack={selectedTrack}/>
      </div>
    </div>
  );
};
