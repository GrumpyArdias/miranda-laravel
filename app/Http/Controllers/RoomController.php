<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $roomPhotos = [
        "single" => "Assets/img-room/room4.jpg",
        "double" => "Assets/img-room/room1.jpg",
        "double-superior" => "Assets/img-room/room2.jpg",
        "suite" => "Assets/img-room/room3.jpg",
    ];

    public function index()
    {
        $rooms = Room::take(6)->get();


        return view('rooms', ['rooms' => $rooms, "roomPhotos" => $this->roomPhotos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function offers()
    {
        $rooms = Room::take(5)->get();
        return view('offers', ['rooms' => $rooms, "roomPhotos" => $this->roomPhotos]);
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        dd($room);
        return;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
