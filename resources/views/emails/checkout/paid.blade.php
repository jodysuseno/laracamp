@component('mail::message')
# Your Transaction has been Confirmed

Mi {{ $checkout->User->name }}
<br>
your transaction as been confirmed, now yo can enjoy the benefit of <b>{{ $checkout->Camp->title }}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
