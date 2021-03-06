@extends('layouts.main')

@section('title', '{{$page->title}}')

@section('content')
    <div class="container">
        <h1>{{$page->title}}</h1>
        <div class="row">
            <p>
                {!! $page->body !!}
            </p>
        </div>
    </div>
@endsection
