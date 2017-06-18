@extends('layout')
@section('hero-body')
    <div class="container has-text-centered">
        <h1 class="title">
            Leave me a message
        </h1>
        <h2 class="subtitle">
            I will answer you as soon as possible
        </h2>
    </div>
@endsection
@section('content')
    <div class="container contact-form">
        @include('includes.errors')
        @if(Session::has('message'))
            <div class="notification is-success">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="notification">
            If you have any interesting project let me now.
            <br>
            Im open for freelance work.
        </div>

        {{Form::open(['url' => '/contact', 'id' => 'contact-form'])}}
        <div class="field">
            <label class="label">Name</label>
            <p class="control has-icons-left">
                <span class="icon is-small is-left">
                    <i class="fa fa-user"></i>
                </span>
                <input name="name" class="input" type="text" placeholder="Name">
            </p>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <p class="control has-icons-left">
                <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                </span>
                <input name="email" class="input" type="text" placeholder="email@example.com">
            </p>
        </div>

        <div class="field">
            <label class="label">Subject</label>
            <p class="control">
                <input name="subject" class="input" type="text" placeholder="Hi There!">
            </p>
        </div>

        <div class="field">
            <label class="label">Message</label>
            <p class="control">
                <textarea class="textarea" name="message" placeholder="Leave a message"></textarea>
            </p>
        </div>

        {!! Form::captcha() !!}
        <br>

        <div class="field">
            <p class="control">
                <label class="checkbox">
                    <input type="checkbox" name="privacy_policy">
                    I have read the <a target="_blank" href="{{route('page', ['page' => 'privacy'])}}">privacy policy</a>
                </label>
            </p>
        </div>
        <div class="field is-grouped">
            <p class="control">
                <button class="button is-primary">Submit</button>
            </p>
        </div>
        {{ Form::close() }}
    </div>
@endsection
@push('scripts-after')
    {!! Captcha::script() !!}
@endpush