@extends('./../layouts/master')

@section('title','Nghệ sĩ nổi bật')

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
                                    <a href="artist/{{ $rows->id }}">
                                        <img src="pages/assets/images/svg/play.svg" alt="">
                                    </a>
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
    <!----Main div close---->
</div>
</div>
@stop