@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('meta_title', setting('site.description'))">
    <meta name="author" content="Esraa Nasr">
@endsection

@section('title')
    <title>@yield('meta_title', setting('site.title'))</title>
@endsection

@section('content')
    <div class="row" id="header">
        <!-- Blog Entries Column -->
        <div class="col-md-8" >

            <h1 class="my-4">@yield('meta_title', setting('site.title'))
                <small>Home Page</small>
            </h1>

            @include('vendor.posts-list')
            

        </div>
        @include('vendor.sidebar')
    </div>
@endsection
