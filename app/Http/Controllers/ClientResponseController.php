<?php

namespace App\Http\Controllers;

use App\Events\hello;
use App\Events\response;
use Illuminate\Http\Request;

class ClientResponseController extends Controller
{
    public function index()
    {
        broadcast(new response());
    }
}
