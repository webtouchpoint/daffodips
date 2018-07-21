@extends('layouts.app')

@section('content')

<div class="module mid">
  <h2>Overview</h2>
</div>

<div class="container my-5">
    <div class="row justify-content-center root">
        <div class="col-md-3">
            @include('partials.nav_about')
        </div>   
        <div class="col-md-9">
            <header class="entry-header">
                <h1 class="entry-title">About Us</h1>
            </header>
            <p>
            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
</div>
@endsection
