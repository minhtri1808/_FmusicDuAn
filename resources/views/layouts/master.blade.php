<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fmusic - @yield('title')</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description" content="Music">
	<meta name="keywords" content="">
	<meta name="author" content="kamleshyadav">
	<meta name="MobileOptimized" content="320">
	<!--Start Style -->
	@include('./../pages/_style')
	<!-- Favicon Link -->
	<link rel="shortcut icon" type="image/png" href="pages/assets/images/favicon.png">
</head>

<body>
@include('./../pages/_header')
@section('title','Âm nhạc và bạn')

<div id="pjax-container">
    @yield('content')
</div>

@include('./../pages/_footer')

@include('./../pages/_javascript')

{{-- <script>
    $(document).ready(function(){
        $(document).pjax('a', '#pjax-container');
        console.log(1);
    });
</script> --}}

</body>

</html>
