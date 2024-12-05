<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomController extends Controller
{
    public function show($id)
    {
        $room = Room::findOrFail($id);

        return view('rooms', compact('room'));
    }
}
