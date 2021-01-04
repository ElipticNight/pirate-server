<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function test()
    {
        return RoomController::createRoom();
    }
}
