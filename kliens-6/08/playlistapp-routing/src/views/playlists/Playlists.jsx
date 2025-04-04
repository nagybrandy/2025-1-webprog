import { PlaylistForm } from "./PlaylistForm";
import { PlaylistList } from "./PlaylistList";
import { TrackList } from "./TrackList";
import { TrackDetails } from "./TrackDetails";
import { examplePlaylists } from "../../domain/playlist";
import { exampleTracks } from "../../domain/track";
import { useEffect, useState } from "react";
import { useParams } from "react-router";

export const Playlists = () => {
  const {plid, trid} = useParams()
  console.log(plid, trid)
  const [selectedPlaylistId, setSelectedPlaylistId] = useState(parseInt(plid) || 1)
  const [selectedTrackInd, setSelectedTrackInd] = useState(parseInt(trid) || undefined)
  
  useEffect(()=> {
    setSelectedPlaylistId(parseInt(plid) || 1)
    setSelectedTrackInd(parseInt(trid) || undefined)
  }, [plid, trid])
  
  const playlists = examplePlaylists;
  let selectedPlaylist = playlists.find((pl) => pl.id === selectedPlaylistId);
  const [selectedTrack, setSelectedTrack] = useState(selectedPlaylist?.tracks[selectedTrackInd-1]);

  return (
    <div>
      <div className="pb-3 pr-3 mt-5 md:flex">
        <div className="w-full p-2 overflow-hidden md:w-4/12 h-80">
          <PlaylistList 
            playlists={playlists} 
            setSelectedPlaylistId={setSelectedPlaylistId} 
            selectedPlaylistId={selectedPlaylistId} 
            setSelectedTrackInd={setSelectedTrackInd} 
          />
        </div>
        <div className="w-full p-2 md:w-8/12 h-80">
          {selectedPlaylist && <TrackList selectedPlaylist={selectedPlaylist} setSelectedTrackInd={setSelectedTrackInd} selectedTrackInd={selectedTrackInd}/>}
        </div>

      </div>
      <div className="px-3">
        {selectedTrack && <TrackDetails selectedTrack={selectedTrack}/>}
      </div>
    </div>
  );
};
