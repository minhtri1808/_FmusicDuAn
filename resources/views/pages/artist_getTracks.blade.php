<?php $number = 1; ?>
<ul class="album_list_name">
    <li>#</li>
    <li>Song Title</li>
    <li>Artist</li>
    <li class="text-center">Duration</li>
    <li class="text-center">Add To Favourites</li>
    <li class="text-center">More</li>
</ul>
@foreach($tracks as $rows)
<ul>
    <li><a href="#"><span class="play_no"><?= $number ?></span><span class="play_hover"></span></a></li>
    <li><a href="#">{{ $rows->nameTrack }}</a></li>
    <li><a href="#">test</a></li>
    <li class="text-center"><a href="#">5:26</a></li>
    <li class="text-center"><a href="#"><span class="ms_icon1 ms_fav_icon"></span></a></li>
    <li class="text-center ms_more_icon"><a href="javascript:;"><span class="ms_icon1 ms_active_icon"></span></a>
        <ul class="more_option">
            <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
            <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
        </ul>
    </li>
</ul>
<?php $number++; ?>
@endforeach