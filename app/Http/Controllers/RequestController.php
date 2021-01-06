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
}
