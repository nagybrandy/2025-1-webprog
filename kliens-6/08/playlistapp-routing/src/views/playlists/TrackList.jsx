import cn from "classnames";
import { BsMusicNoteBeamed as TrackIcon} from "react-icons/bs";
import { examplePlaylists } from "../../domain/playlist";
import { useNavigate } from "react-router";


export function TrackList({selectedPlaylist, selectedTrackInd, handleRouteChange}) {
  return (
    <>
    <div className="w-full h-full overflow-x-hidden shadow-xl join join-vertical bg-base-300">
      <h2 className="p-3 text-2xl font-bold join-item">Tracks of {selectedPlaylist.title}</h2>
      <div className="overflow-y-scroll w-full join join-vertical pl-[0.6rem]  overflow-hidden">
        {selectedPlaylist.tracks.map((track, ind) => (
            <div key={track.id} className={`btn rounded-lg items-start p-3 border-0 hover:bg-base-200 ${selectedTrackInd === ind+1 ? "bg-base-200" : "bg-base-300"}`} onClick={()=> handleRouteChange(selectedPlaylist.id, ++ind)}>
              <div className="flex px-5 w-[100%]">
                <div className="w-8/12 font-bold text-left">
                  <TrackIcon className="inline mr-2" />{track.title}
                </div>
                <div className="w-4/12 text-right">{track.artist}</div>
              </div>
          </div>
        ))}
      </div>
    </div>
    </>
  );
}
