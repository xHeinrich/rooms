<?php
namespace xHeinrich\Rooms\Traits;

use xHeinrich\Rooms\Models\Room;

trait Rooms
{
    public function canJoinRoom($room_id){
        $room = Room::find($room_id);
        if($room->inRoom(Auth::user()->id)){
            return true;
        }
        return false;
    }

    public function rooms()
    {
        return $this->belongsToMany('xHeinrich\Rooms\Models\Room');
    }
}