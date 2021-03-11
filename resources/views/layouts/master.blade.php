 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<title>@yield('title') | FMusic - Âm nhạc và bạnㅤㅤ</title>
 	<base href="{{asset('/')}}">
 	<meta charset="utf-8">
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
 	<meta name="description" content="FMusic">
 	<meta name="keywords" content="FMusic">
 	<meta name="author" content="AnhEmTeam">
 	<meta name="MobileOptimized" content="320">
 	<!--Start Style -->
 	@include('./../pages/_style')
 	<!-- Favicon Link -->
 	<link rel="shortcut icon" type="image/png" href="pages/assets/images/favicon.png">
 </head>

 <body>
 	@include('./../pages/_header')

 	<div id="pjax-container">
 		@yield('content')
 	</div>

 	@include('./../pages/_footer')
 	<!--Main js file Style-->
 	@include('./../pages/_javascript')

	@if(!empty('pagesJS'))
	<script src="pages/assets/js/pages/@yield('pagesJS').js"></script>
	@endif
 	

 	{{-- <script>
    $(document).ready(function(){
        $(document).pjax('a', '#pjax-container');
        console.log(1);
    });


</script> --}}

 </body>

 </html>