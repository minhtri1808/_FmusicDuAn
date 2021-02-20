<?php

namespace App\Http\Controllers;
use App\Models\Track_Singer;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TrackSingerController extends Controller
{
    public function index (){
    $Track = Track_Singer::select('*')
    ->join('tracks', 'tracks.id', 'track__singers.idTrack')
    ->join('singers', 'singers.id', 'track__singers.idSinger')
    ->get();


$result = DB::table('singers')

    ->join('track__singers', 'track__singers.idSinger','=', 'singers.id')

    ->join('tracks', 'tracks.id','=','track__singers.idTrack')

    ->select('tracks.nameTrack as nameTrack',
    DB::raw('GROUP_CONCAT(singers.nameSingle) as nameSingles'),
    DB::raw('count(singers.id) as total'))

    ->orderBy('tracks.nameTrack','desc')

    ->groupBy('tracks.id')



    ->get();

    return $result;
    // return response()->json([
    //     'Track single' => $Track
    // ], 404);
    }
}
