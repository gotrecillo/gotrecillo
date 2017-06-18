@extends('layout')
@section('hero-body')
    <div class="container has-text-centered">
        <h1 class="title">
            {{$project->name}}
        </h1>
    </div>
@endsection
@section('content')
    <div class="container content">
        <h1>{{$project->title}}</h1>
        <div class="portfolio-technology-wrapper">
            @foreach($project->technologies as $technology)
                <span class="portfolio-technology">
                    {!! $technology->getLogoImage() !!}
                    <span>{{$technology->name}}</span>
                </span>
            @endforeach
        </div>

        @if($project->url)
            <p><a href="{{$project->url}}" target="_blank">Visit site</a></p>
        @endif
        @if($project->repository)
            <p><a href="{{$project->repository}}" target="_blank">View code</a></p>
        @endif

        <hr>
        @if($project->description)
            {!! $project->description !!}
        @endif
        <img src="/{{$project->image}}" alt="Project Image">
    </div>
@endsection