<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    private static $counter = 0;

    public function createRoom()
    {
        self::$counter++;
        return self::$counter;
    }
}
