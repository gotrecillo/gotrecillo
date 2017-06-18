@extends('layout')
@section('hero-body')
    <div class="container has-text-centered">
        <h1 class="title">
            My portfolio
        </h1>
    </div>
@endsection
@section('content')
    <div class="container content">
        <div class="columns">
            @foreach ($projects as $project)
                @include('includes.project', ['project' => $project])
            @endforeach
        </div>
    </div>
@endsection