@extends('layouts.app')

@section('script')
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
@endsection

@section('content')

@include('partials.pages.welcome.carousel')

@include('partials.pages.welcome.welcome')

@include('partials.pages.welcome.feature')

@endsection
