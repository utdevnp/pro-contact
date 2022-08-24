@component('mail::message')
<p> Hello I am  <b> {{$name}} </p>
<b>Message:</b>
<p> {{$message}} </p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
