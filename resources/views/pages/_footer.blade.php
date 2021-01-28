<!----Footer Start---->
<div class="ms_footer_wrapper">
    <div class="ms_footer_logo">
        <a href="/"><img src="pages/assets/images/open_logo.png" alt="" width="100px"></a>
    </div>
    <div class="ms_footer_inner">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer_box">
                    <h1 class="footer_title">Giới thiệu về FMusic</h1>
                    <p>[Update từ bài giới thiệu] Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_app">
                    <h1 class="footer_title">Download our App</h1>
                    <p>Go Mobile with our app.<br> Listen to your favourite songs at just one click. Download Now !</p>
                    <a href="#" class="foo_app_btn"><img src="pages/assets/images/google_play.jpg" alt="" class="img-fluid"></a>
                    <a href="#" class="foo_app_btn"><img src="pages/assets/images/app_store.jpg" alt="" class="img-fluid"></a>
                    <a href="#" class="foo_app_btn"><img src="pages/assets/images/windows.jpg" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_subscribe">
                    <h1 class="footer_title">Nhận thông báo</h1>
                    <p>Nhận thông báo khi chúng tôi có nội dung mới.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nhập tên của bạn">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nhập Email của bạn">
                        </div>
                        <div class="form-group">
                            <a href="#" class="ms_btn">Đăng ký nhận tin</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_box footer_contacts">
                    <h1 class="footer_title">Liên hệ</h1>
                    <ul class="foo_con_info">
                        <li>
                            <div class="foo_con_icon">
                                <img src="pages/assets/images/svg/phone.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">Gọi cho chúng tôi :</span>
                                <span>0987654321 - 0287654321</span>
                            </div>
                        </li>
                        <li>
                            <div class="foo_con_icon">
                                <img src="pages/assets/images/svg/message.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">Email của chúng tôi :</span>
                                <span><a href="#">demo@mail.com </a>, <a href="#">dummy@mail.com</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="foo_con_icon">
                                <img src="pages/assets/images/svg/add.svg" alt="">
                            </div>
                            <div class="foo_con_data">
                                <span class="con-title">Địa chỉ :</span>
                                <span>Số 1 Nguyễn Thị Minh Khai, Quận 1, Tp.HCM</span>
                            </div>
                        </li>
                    </ul>
                    <div class="foo_sharing">
                        <div class="share_title">Theo dõi chúng tôi :</div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Copyright---->
    <div class="col-lg-12">
        <div class="ms_copyright">
            <div class="footer_border"></div>
            <p>Bản quyền &copy; 2021 <a href="#">Anh Em Team</a>. Giữ toàn quyền.</p>
        </div>
    </div>
</div>
<!----Audio Player Section---->
<div class="ms_player_wrapper">
    <div class="ms_player_close">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <div class="player_mid">
        <div class="audio-player">
            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                <div class="player_left">
                    <div class="ms_play_song">
                        <div class="play_song_name">
                            <a href="javascript:void(0);" id="playlist-text">
                                <div class="jp-now-playing flex-item">
                                    <div class="jp-track-name"></div>
                                    <div class="jp-artist-name"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="play_song_options">
                        <ul>
                            <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_download"></i></span>Tải xuống ngay</a></li>
                            <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_fav"></i></span>Thêm vào yêu thích</a></li>
                            <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_playlist"></i></span>Thêm vào danh sách</a></li>
                            <li><a href="#"><span class="song_optn_icon"><i class="ms_icon icon_share"></i></span>Chia sẻ</a></li>
                        </ul>
                    </div>
                    <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
                <!----Right Queue---->
                <div class="jp_queue_wrapper">
                    <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up" aria-hidden="true"></i> đang phát</span>
                    <div id="playlist-wrap" class="jp-playlist">
                        <div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <h2>đang phát</h2>
                        <div class="jp_queue_list_inner">
                            <ul>
                                <li>&nbsp;</li>
                            </ul>
                        </div>
                        <div class="jp_queue_btn">
                            <a href="javascript:;" class="ms_clear" data-toggle="modal" data-target="#clear_modal">xóa</a>
                            <a href="clear_modal" class="ms_save" data-toggle="modal" data-target="#save_modal">lưu</a>
                        </div>
                    </div>
                </div>
                <div class="jp-type-playlist">
                    <div class="jp-gui jp-interface flex-wrap">
                        <div class="jp-controls flex-item">
                            <button class="jp-previous" tabindex="0">
                                <i class="ms_play_control"></i>
                            </button>
                            <button class="jp-play" tabindex="0">
                                <i class="ms_play_control"></i>
                            </button>
                            <button class="jp-next" tabindex="0">
                                <i class="ms_play_control"></i>
                            </button>
                        </div>
                        <div class="jp-progress-container flex-item">
                            <div class="jp-time-holder">
                                <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                            </div>
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar">
                                        <div class="bullet">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="jp-volume-controls flex-item">
                            <div class="widget knob-container">
                                <div class="knob-wrapper-outer">
                                    <div class="knob-wrapper">
                                        <div class="knob-mask">
                                            <div class="knob d3"><span></span></div>
                                            <div class="handle"></div>
                                            <div class="round">
                                                <img src="pages/assets/images/svg/volume.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input></input> -->
                                </div>
                            </div>
                        </div>
                        <div class="jp-toggles flex-item">
                            <button class="jp-shuffle" tabindex="0" title="Shuffle">
                                <i class="ms_play_control"></i></button>
                            <button class="jp-repeat" tabindex="0" title="Repeat"><i class="ms_play_control"></i></button>
                        </div>
                        <div class="jp_quality_optn custom_select">
                            <select>
                                <option>chất lượng</option>
                                <option value="1">Lossless</option>
                                <option value="2">320kbs</option>
                                <option value="3">128kbs</option>
                                <option value="4">64kbs</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main div-->
</div>
</div>
<!----Register Modal Start---->
<!-- Modal -->
<div class="ms_register_popup">
    <div id="myModal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog register_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="pages/assets/images/register_img.png" alt="" class="img-fluid" />
                    </div>
                    <div class="ms_register_form">
                        <h2>Đăng ký / Đăng nhập</h2>
                        <div class="form-group">
                            <input type="text" placeholder="Nhập tên của bạn" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-user" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Nhập Email của bạn" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Nhập mật khẩu" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Nhập lại mật khẩu" class="form-control">
                            <span class="form_icon">
                                <i class=" fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <a href="#" class="ms_btn">Đăng ký ngay</a>
                        <p>Tôi đã có tài khoản, <a href="#myModal1" data-toggle="modal" class="ms_modal hideCurrentModel">đăng nhập.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Login Popup Start---->
    <div id="myModal1" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog login_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="pages/assets/images/register_img.png" alt="" class="img-fluid" />
                    </div>
                    <div class="ms_register_form">
                        <h2>Đăng nhập / Đăng ký</h2>
                        <div class="form-group">
                            <input type="text" placeholder="Nhập Email của bạn" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Nhập mật khẩu" class="form-control">
                            <span class="form_icon">
                                <i class="fa_icon form-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="remember_checkbox">
                            <label>Lưu đăng nhập
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <a href="profile.html" class="ms_btn" target="_blank">Đăng nhập</a>
                        <div class="popup_forgot">
                            <a href="#">Tôi không nhớ mật khẩu ?</a>
                        </div>
                        <p>Tôi chưa có tài khoản, <a href="#myModal" data-toggle="modal" class="ms_modal1 hideCurrentModel">đăng ký ngay.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----Queue Clear Model ---->
<div class="ms_clear_modal">
    <div id="clear_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Bạn có muốn xóa danh sách đang phát?</h1>
                    <div class="clr_modal_btn">
                        <a href="#">Xác nhận</a>
                        <a href="#">Từ chối</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----Queue Save Modal---->
<div class="ms_save_modal">
    <div id="save_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>đăng nhập để bắt đầu chia sẻ âm nhạc của bạn!</h1>
                    <div class="save_modal_btn">
                        <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Tiếp tục với Google </a>
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> Tiếp tục với Facebook</a>
                    </div>
                    <div class="ms_save_email">
                        <h3>hoặc Email của bạn</h3>
                        <div class="save_input_group">
                            <input type="text" placeholder="Nhập tên của bạn" class="form-control">
                        </div>
                        <div class="save_input_group">
                            <input type="password" placeholder="Nhập mật khẩu" class="form-control">
                        </div>
                        <button class="save_btn">Đăng nhập</button>
                    </div>
                    <div class="ms_dnt_have">
                        <span>Tôi chưa có tài khoản, </span>
                        <a href="javascript:;" class="hideCurrentModel" data-toggle="modal" data-target="#myModal">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Main js file Style-->


