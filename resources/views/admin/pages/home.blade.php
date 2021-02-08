<h1>đây là trang admin</h1>
@if (Auth::check())
    xin chào: {{Auth::user()->email}}
@endif
<a href="{{route('auth.logout')}}">Đăng xuất</a>
