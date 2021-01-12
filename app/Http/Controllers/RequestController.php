<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function createRoom()
    {
        return RoomController::createRoom();
    }

    public function joinRoom(request $request)
    {
        return RoomController::addClientToRoom($request->channel);
    }

    public function message(request $request)
    {
        return RoomController::message($request->channel);
    }

    public function ready(request $request)
    {
        $room = new RoomController();
        return $room->clientReady();
    }

    public function unready(request $request)
    {
        $room = new RoomController();
        return $room->clientUnReady();
    }
}
