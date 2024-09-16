<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @include('login.layout.header')
</head>
<body class="vertical-layout vertical-overlay-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-overlay-menu" data-col="2-columns">
<!-- fixed-top-->
@include('login.layout.navbar')

{{--@include('admin.layout.sidebar')--}}
<div class="app-content content" id="app_content">
    <div class="content-wrapper">
    	@if (isset($ticker))
	    	<div class="marquee3k" data-speed="0.25" data-pausable="bool">
				<span>{{ $ticker }}</span>
			</div>
		@endif

        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
{{--@include('admin.components.modals')--}}
@include('login.layout.footer')
@include('login.layout.sonic_search')
<audio id="audio_success" autostart="false">
    <source src="{{asset('file/success_sound.mp3')}}" type="audio/ogg">
    <source src="{{asset('file/success_sound.mp3')}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<audio id="audio_error" autostart="false">
    <source src="{{asset('file/error.mp3')}}" type="audio/ogg">
    <source src="{{asset('file/error.mp3')}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
</body>
</html>
