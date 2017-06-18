@extends('layout')
@section('hero-body')
    <div class="container has-text-centered">
        <h1 class="title">
            {{$page->title}}
        </h1>
    </div>
@endsection
@section('content')
    <div class="container content legal has-text-justified">
        {!! $page->content !!}
    </div>
@endsection