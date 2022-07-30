<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function room($room = "建物です")
    {
        if($room <> "建物です"){
            return "部屋番号は" .$room . "です";
        } else {
            return $room;
        }
        
    }
}
