@extends('layout')
@section('hero-body')
    <div class="container has-text-centered">
        <h1 class="title typewriter-title" id="slider-title">
        </h1>
        <h2 class="subtitle typewriter-subtitle" id="slider-subtitle">
        </h2>
    </div>
@endsection
@section('content')
    <div class="container content">
        <h2>Some of my works</h2>
        <hr>
        @foreach ($projects as $project)
            @include('includes.project', ['project' => $project])
        @endforeach
    </div>
    <github-profile></github-profile>
@endsection