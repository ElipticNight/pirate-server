<?php

namespace App\Http\Controllers;

use App\Events\RoomJoined;
use App\Models\Room;
use App\Models\Client;
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

    public static function addClientToRoom($channel)
    {
        $client = new Client();
        $client->channel_id = $channel;
        $client->save();

        $room = Room::firstWhere('channel', $channel);
        $room->client_no++;
        $room->save();

        event(new RoomJoined($channel));

        return "success";
    }

    public function __construct()
    {
        //fetch room info from database
    }
}
