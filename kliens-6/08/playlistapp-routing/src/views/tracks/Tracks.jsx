import { exampleTracks } from "../../domain/track";
import { TrackForm } from "./TrackForm";
import { Track } from "./Track";
import { FaPlus as PlusIcon } from "react-icons/fa";
import { Modal } from "react-daisyui";
import { useState } from "react";

export function Tracks() {
  const {
    Dialog,
    handleShow
  } = Modal.useDialog();
  const tracks = exampleTracks;
  const [open, setOpen] = useState(false)

  return (
    <div className="mt-5">
        <div className="join join-vertical w-full bg-base-300 shadow-xl overflow-x-hidden h-[80vh] pb-3 ">
          <div className="navbar join-item">
            <h2 className="flex-1 px-2 text-2xl font-bold join-item">Tracks</h2>
            <button className="flex-none text-lg btn btn-neutral text-neutral-content" onClick={()=> setOpen(true)}><PlusIcon /></button>
          </div>
          <div className="overflow-y-scroll w-full join join-vertical pl-[0.6rem]  overflow-hidden">
            {tracks.map((track) => (
                <Track track={track} key={track.id}/>
            ))}
          </div>
        </div>
        <TrackForm  Dialog={Dialog} setOpen={setOpen} open={open}/>
    </div>
  );
}
