@component('mail::message')
# Konfirmado

-{{$name}}
-{{$email}}



@component('mail::button', ['url' => 'https://esperanto-centroj.com/email-verification/'.$email])
Konfirmu vin
@endcomponent

@component('mail::panel')
{{$message}}
@endcomponent


Dankon,<br>
{{ config('app.name') }}
@endcomponent
