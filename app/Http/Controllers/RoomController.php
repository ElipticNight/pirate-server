<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public static $roomID;

    public static function createRoom()
    {
        //create room id and store in database
        return 'herliragnoae';
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
