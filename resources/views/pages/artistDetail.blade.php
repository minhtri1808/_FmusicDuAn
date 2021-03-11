@extends('./../layouts/master')

@section('title', 'Trang cá nhân của '.$get_info->nameSingle)
@section('pagesJS','artistDetail')

@section('content')
<style>
    .about_artist {
        max-height: 80px;
        overflow: hidden;
        transition: max-height 0.25s ease;
    }

    .read-more {
        width: 100%;
        display: inline-block;
        margin-top: 10px;
        margin-bottom: 1px;
        font-weight: bold;
        cursor: pointer;
    }
</style>
<!---Main Content Start--->
{{-- <div class="ms_content_wrapper padder_top60"> --}}
<!----Album Single Section Start---->
<div class="ms_album_single_wrapper ms_artist_single">
    <div class="album_single_data">
        <div class="album_single_img">
            <img class="img_240_format" src="{{ $get_info->urlImages }}" alt="" class="img-fluid">
        </div>
        <div class="album_single_text">
            <h2>{{ $get_info->nameSingle }}</h2>
            <div class="about_artist">
                <div class="text-full">
                    {{ $get_info->information }}
                </div>
            </div>
            <span class="read-more">Xem đầy đủ <i class="fal fa-angle-down"></i></span>
            <div class="album_btn">
                <a href="#" class="ms_btn play_btn"><span class="play_all"><img src="pages/assets/images/svg/play_all.svg" alt="">Play All</span><span class="pause_all"><img src="pages/assets/images/svg/pause_all.svg" alt="">Pause</span></a>
                <a href="#" class="ms_btn"><span class="play_all"><img src="pages/assets/images/svg/add_q.svg" alt="">Add To Queue</span></a>
            </div>
        </div>
        <div class="album_more_optn ms_more_icon">
            <span><img src="pages/assets/images/svg/more.svg" alt=""></span>
        </div>
        <ul class="more_option">
            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
        </ul>
    </div>
    <!----Song List---->
    <div class="album_inner_list">
        <div class="album_list_wrapper" id="track_list" idArtist="{{ $get_info->id }}">
        </div>
    </div>
    <div class="ms_view_more padder_bottom20">
        <a href="" class="ms_btn" id="load_more">Xem Thêm</a>
    </div>
</div>
<!---Main Content Start--->
<div class="ms_content_wrapper ms_artist_content">
    <div class="ms_featured_slider">
        <div class="ms_heading">
            <h1>Bài hát mới nhất</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_relative_inner">
            <div class="ms_feature_slider swiper-container">
                <div class="swiper-wrapper">

                    @foreach($get_newTracks as $rows)
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
                                <h3><a href="#">{{ $rows->nameTrack }}</a></h3>
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
    <!----Main div close---->
</div>
<!---Main Content Start--->
<div class="ms_content_wrapper ms_artist_content">
    <div class="ms_featured_slider">
        <div class="ms_heading">
            <h1>Bài hát nhiều lượt nghe</h1>
            <span class="veiw_all"><a href="#">view more</a></span>
        </div>
        <div class="ms_relative_inner">
            <div class="ms_feature_slider swiper-container">
                <div class="swiper-wrapper">

                    @foreach($get_topListen as $rows)
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
                                <h3><a href="#">{{ $rows->nameTrack }}</a></h3>
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
    <!----Main div close---->
</div>
{{-- </div> --}}

@stop