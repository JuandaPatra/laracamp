@component('mail::message')
Welcome!!

Hi {{$user->name}}
<br>
Welcome to Laracamp

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
