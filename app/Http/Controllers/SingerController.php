<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use GrahamCampbell\ResultType\Result;

class SingerController extends Controller
{
    function getArtist()
    {
        $get_ngheSiNoiBat = DB::table('singers')->select('singers.*')->join('likes', 'likes.idSinger', '=', 'singers.id')->where('singers.anHien', 1)->groupBy('singers.id')->orderBy(\DB::raw('count(likes.id)'), 'DESC')->limit(20)->get();

        $get_ngheSiNhieuLuotNghe = DB::table('singers')->select('singers.*')->join('track__singers', 'singers.id', '=', 'track__singers.idSinger')->join('tracks', 'track__singers.idTrack', '=', 'tracks.id')->groupBy('singers.id')->orderBy(\DB::raw('sum(tracks.View)'), 'DESC')->where('singers.anHien', 1)->limit(24)->get();

        $data = ['get_ngheSiNoiBat' => $get_ngheSiNoiBat, 'get_ngheSiNhieuLuotNghe' => $get_ngheSiNhieuLuotNghe];
        return view('pages.artist', $data);
    }

    function getOneArtist($id)
    {
        $get_thongTinCaSi = DB::table('singers')->select('*')->where('id', $id)->where('anHien', 1)->first();
        $get_baiHatMoiNhat = DB::table('tracks')->select('tracks.*')->join('track__singers', 'track__singers.idTrack', '=', 'tracks.id')->where('track__singers.idSinger', $id)->where('anHien', 1)->orderBy('postDate', 'DESC')->get();
        $get_baiHatNhieuLuotNGhe = DB::table('tracks')->select('tracks.*')->join('track__singers', 'track__singers.idTrack', '=', 'tracks.id')->where('track__singers.idSinger', $id)->where('anHien', 1)->orderBy('View', 'DESC')->get();

        $data = ['get_info' => $get_thongTinCaSi, 'get_newTracks' => $get_baiHatMoiNhat, 'get_topListen' => $get_baiHatNhieuLuotNGhe];

        return view('pages.artistDetail', $data);
    }

    public function getTrackByArtist($id, $qty)
    {
        $get_trackByArtist = DB::table('tracks')->select('tracks.*')->join('track__singers', 'tracks.id', '=', 'track__singers.idTrack')->where('track__singers.idSinger', $id)->where('anHien', 1)->orderBy('postDate', 'DESC')->limit($qty)->get();

        $data = ['tracks' => $get_trackByArtist];

        return view('pages.artist_getTracks', $data);
    }
}
