@extends('layouts.links')
@section('title','All Links')
@section('content')
     <h1>This is all links:</h1>
    <div class="container">
        {{-- <div id="example"></div> --}}
        <div class="content">
            <div class="flex-center">

                @foreach ($links as $link)
                    <div><a href={{ $link->url }}>{{ $link->title }}</a></div>
                @endforeach
            </div>
        </div>
    </div>
    <button><a href="/links/create">Create a Link</a></button>
    <div id="example"></div>
    <script src={{mix("/js/app.js")}}></script>
    <script async type="text/javascript" src="//localhost:3000/browser-sync/browser-sync-client.js"></script> 
    
@endsection

