<?php

// Get nghệ sĩ nổi bật tại #1
$get_ngheSiNoiBat = DB::table('singers')->select('singers.*')->join('likes', 'likes.idSinger', '=', 'singers.id')->where('singers.anHien', 1)->groupBy('singers.id')->orderBy(\DB::raw('count(likes.id)'), 'DESC')->limit(20)->get();

$get_ngheSiNhieuLuotNghe = DB::table('singers')->select('singers.*')->join('track__singers', 'singers.id', '=', 'track__singers.idSinger')->join('tracks', 'track__singers.idTrack', '=', 'tracks.id')->groupBy('singers.id')->orderBy(\DB::raw('sum(tracks.View)'), 'DESC')->limit(24)->get();
?>
@extends('./../layouts/master')

@section('title','Ca sĩ nổi bật')

<!---Banner--->
@section('content')
<!---Main Content Start--->
<div class="ms_content_wrapper padder_top60">
    <!---Featured Artists Music--->
    <div class="ms_featured_slider padder_top20">
        <div class="ms_heading">
            <h1>Nghệ sĩ nổi bật</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_relative_inner">
            <div class="ms_feature_slider swiper-container">
                <div class="swiper-wrapper">

                    <!-- #1 - Nghe si noi bat -->
                    @foreach ($get_ngheSiNoiBat as $rows)
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img class="img_240_format" src="{{ $rows->urlImages }}" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào yêu thích</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Thêm vào hàng chờ phát</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào danh sách phát</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="artist_single.html">{{ $rows->nameSingle }}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next1 slider_nav_next"></div>
            <div class="swiper-button-prev1 slider_nav_prev"></div>
        </div>
    </div>
    <!----Top Artist Section---->
    <div class="ms_top_artist">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms_heading">
                        <h1>Top 24 nghệ sĩ có nhiều lượt nghe nhất</h1>
                    </div>
                </div>

                @foreach ($get_ngheSiNhieuLuotNghe as $rows)
                <div class="col-lg-2 col-md-6">
                    <div class="ms_rcnt_box marger_bottom30">
                        <div class="ms_rcnt_box_img">
                            <img class="img_240_format" src="{{ $rows->urlImages }}" alt="" class="img-fluid">
                            <div class="ms_main_overlay">
                                <div class="ms_box_overlay"></div>
                                <div class="ms_more_icon">
                                    <img src="pages/assets/images/svg/more.svg" alt="">
                                </div>
                                <ul class="more_option">
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào yêu thích</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Thêm vào hàng chờ phát</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào danh sách phát</a></li>
                                    <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>
                                </ul>
                                <div class="ms_play_icon">
                                    <img src="pages/assets/images/svg/play.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ms_rcnt_box_text">
                            <h3><a href="artist_single.html">{{ $rows->nameSingle }}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!----Live Radio Section Start---->
    <div class="ms_radio_wrapper padder_top20">
        <div class="ms_heading">
            <h1>Live Radio</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_relative_inner">
            <div class="ms_radio_slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img1.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Top Trendings</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img2.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">New Romantic Charts</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img3.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Dance Beats - Hip Hops</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img4.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Workout Time</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img5.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Best Classics Of All Time</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img6.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Heart Broken - Soul Music</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img1.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Dream Your Moments (Duet)</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img2.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Until I Met You</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img3.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Gimme Some Courage</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ms_rcnt_box">
                            <div class="ms_rcnt_box_img">
                                <img src="pages/assets/images/radio/img4.jpg" alt="">
                                <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    <div class="ms_more_icon">
                                        <img src="pages/assets/images/svg/more.svg" alt="">
                                    </div>
                                    <ul class="more_option">
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                                    </ul>
                                    <div class="ms_play_icon">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="ms_rcnt_box_text">
                                <h3><a href="#">Dark Alley Acoustic</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next4 slider_nav_next"></div>
            <div class="swiper-button-prev4 slider_nav_prev"></div>
        </div>
    </div>
    <!----Main div close---->
</div>
</div>
@stop