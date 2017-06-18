@component('mail::message')
# Contact from {{$data['name']}}
{{$data['email']}}

@component('mail::panel')
{{$data['subject']}}
@endcomponent

{{$data['message']}}

@endcomponent
