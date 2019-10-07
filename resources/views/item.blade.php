@extends('layouts.main')

@section('title', '{{$item->title}}')



@section('content')
    <div class="container">
        <h1>{{$item->title}}</h1>
        <div class="row">
            <p>
                {!! $item->body !!}
            </p>
        </div>
    </div>
@endsection
