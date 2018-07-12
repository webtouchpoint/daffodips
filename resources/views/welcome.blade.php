@extends('layouts.app')

@section('style')
	<link rel="stylesheet" href="libs/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="libs/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
@endsection

@section('content')

@include('partials.pages.welcome.slide')

@include('partials.pages.welcome.welcome')

@include('partials.pages.welcome.feature')

@endsection
