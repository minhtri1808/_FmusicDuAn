<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function show(){
        return view('pages/artistsinger');
    }
}
