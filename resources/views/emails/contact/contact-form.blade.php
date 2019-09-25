@component('mail::message')
# Intro

<strong>Name</strong>
{{$data['name']}}

<strong>Email</strong>
{{$data['email']}}

<strong>message</strong>
{{$data['message']}}

@component('mail::button', ['url' => ''])
    # message
@endcomponent


@endcomponent
