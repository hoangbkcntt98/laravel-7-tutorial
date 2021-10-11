@extends('layouts.links')
@section('title','All Links')
@section('stylesheet')
<link rel="stylesheet" href="{{mix('/css/app.css')}}">
@endsection
@section('content')
    <div id="sidebar"></div>
     {{-- <h1>This is all links:</h1>
    <div class="container">
        <h2>desune sukana nesfdas</h2>
        <div class="content">
            <div class="flex-center">

                @foreach ($links as $link)
                    <div><a href={{ $link->url }}>{{ $link->title }}</a></div>
                @endforeach
            </div>
        </div>
    </div>
    <button><a href="/links/create">Create a Link</a></button> --}}
    <div id="example"></div>
   
    
@endsection

