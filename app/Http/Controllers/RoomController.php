<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Objects\Room as RoomInstance;

class RoomController extends Controller
{
    public static $roomID;

    public static function createRoom()
    {
        $room = new Room();
        $channel = strtoupper(dechex(rand(1048576, 16777215)));
        $room->channel = $channel;

        $room->save();
        return $channel;
    }

    public static function addUserToRoom()
    {
        //
    }

    public function __construct()
    {
        //fetch room info from database
    }
}
