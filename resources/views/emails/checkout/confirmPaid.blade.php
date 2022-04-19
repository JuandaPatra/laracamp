@component('mail::message')
Hi {{$checkout->user->name}}

Your Transactions has been confirmed, now you can the benefit of <b>{{$checkout->camp->title}}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
