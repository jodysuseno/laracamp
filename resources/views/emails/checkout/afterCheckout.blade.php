@component('mail::message')
# Register Camp : {{ $checkout->Camp->title }}

Mi {{ $checkout->User->name }}
<br>
Thankyou for register on <b>{{ $checkout->Camp->title }}</b>, please see payment by click the button below.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
