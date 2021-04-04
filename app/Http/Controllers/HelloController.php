<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return "建物です";
    }
    public function room($room = "0")
    {
        return "部屋番号は". $room. "です";
    }
}