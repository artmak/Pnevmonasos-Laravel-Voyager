@extends('layouts.main')

@section('title', '{{$page->title}}')
@section('content')
<div class="container">
    <br>

    <div class="row t-align">
        @foreach($posts as $post)
            <div class="col-xs-6 col-sm-4 col-md-3 pad-15">
                <a href="/public/item/{{$post->slug}}"><h4>{{$post->title}}</h4>
                    <img src="{{ Voyager::image( $post->image ) }}">
                    <p class="preview-details">{!! $post->excerpt !!}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
